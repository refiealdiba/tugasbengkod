@extends('layouts.main')

@section('title')
    Periksa
@endsection

@section('content')
<div class="container-fluid">
    @if (Auth::user()->role == 'pasien')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">              
                <!-- form start -->
                <form action="{{ route('periksa.daftarPeriksa') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id_pasien">
                        <input type="hidden" value="-" name="catatan">
                        <input type="hidden" value="0" name="biaya_periksa">
                        <input type="hidden" value="pending" name="status">

                        <div class="form-group">
                            <label for="id_dokter">Dokter</label>
                            <select type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="Dokter...">
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label for="tgl_periksa">Tanggal Periksa</label>
                            <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa" placeholder="2022-12-31...">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Periksa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

    {{-- Tabel daftar periksa --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-lg">Daftar Periksa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (Auth::user()->role == 'dokter')
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Aksi</th>       
                                    <th>Status</th>                         
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($periksasByIdDokter) == 0)
                                    <tr>
                                        <td colspan="4" class="text-center">Anda belum memiliki pasien</td>
                                    </tr>
                                @else
                                    @php $no = 1; @endphp
                                    @foreach ($periksasByIdDokter as $periksa)                            
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $periksa->pasien->nama }}</td>
                                            <td>
                                                @if ($periksa->status == 'pending')
                                                    <a href="/dokter/periksa/{{ $periksa->id }}" class="btn btn-primary" role="button">Periksa</a>
                                                @else
                                                    <a href="/dokter/periksa/{{ $periksa->id }}" class="btn btn-secondary" role="button">Detail</a>
                                                @endif
                                            </td>      
                                            <td>{{ $periksa->status }}</td>                          
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    @else
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($periksasByIdPasien) == 0)
                                    <tr>
                                        <td colspan="5" class="text-center">Anda belum melakukan pemeriksaan</td>
                                    </tr>
                                @else
                                    @php $no = 1; @endphp
                                    @foreach ($periksasByIdPasien as $periksa)                            
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $periksa->dokter->nama }}</td>
                                            <td>{{ $periksa->tgl_periksa }}</td>                                    
                                            <td>
                                                @if ($periksa->status == 'pending')                                            
                                                    <a class="btn btn-secondary" role="button" disabled>Detail</a>
                                                @else
                                                    <a href="/periksa/{{ $periksa->id }}" class="btn btn-primary" role="button">Detail</a>
                                                @endif
                                            </td>
                                            <td>{{ $periksa->status }}</td>                                                          
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->      
@endsection
