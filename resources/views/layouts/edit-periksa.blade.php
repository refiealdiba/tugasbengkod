@extends('layouts.main')

@section('title')
    Detail Periksa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
            <form action="{{ route('periksa.update', $periksa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">                        
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{ $periksa->pasien->nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_periksa">Tanggal Periksa</label>
                            <input type="text" class="form-control" id="tgl_periksa" name="tgl_periksa" value="{{ $periksa->tgl_periksa }}" readonly>
                        </div>
                        @if($periksa->status == 'pending')
                        <div class="form-group">
                            <label for="biaya_periksa">Biaya Periksa</label>
                            <input type="text" class="form-control" id="biaya_periksa" name="biaya_periksa" value="{{ $periksa->biaya_periksa }}">
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" id="catatan" name="catatan">{{ $periksa->catatan }}</textarea>
                        </div>
                        @else
                        <div class="form-group">
                            <label for="biaya_periksa">Biaya Periksa</label>
                            <input type="text" class="form-control" id="biaya_periksa" name="biaya_periksa" value="{{ $periksa->biaya_periksa }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" id="catatan" name="catatan" disabled>{{ $periksa->catatan }}</textarea>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="id_obat">Obat</label>
                            @if($periksa->status == 'pending')
                            <select class="form-control" id="id_obat" name="id_obat">
                                <option disabled selected>Pilih obat...</option>
                                @foreach ($obats as $obat)
                                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                                @endforeach
                            </select>
                            @else
                                <ul class="list-group">
                                    @foreach ($periksa->detailPeriksa as $detail)
                                        <li class="list-group-item">
                                            {{ $detail->obat->nama_obat ?? 'Obat tidak tersedia' }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <input type="hidden" value="selesai" name="status">
                    </div>
                    @if($periksa->status == 'pending')
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Selesai Periksa</button>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
