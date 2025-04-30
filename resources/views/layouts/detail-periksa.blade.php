@extends('layouts.main')

@section('title')
    Detail Periksa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <form>
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{ $periksa->pasien->nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_dokter">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="{{ $periksa->dokter->nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_periksa">Tanggal Periksa</label>
                            <input type="text" class="form-control" id="tgl_periksa" name="tgl_periksa" value="{{ $periksa->tgl_periksa }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="biaya_periksa">Biaya Periksa</label>
                            <input type="text" class="form-control" id="biaya_periksa" name="biaya_periksa" value="{{ $periksa->biaya_periksa }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="3" readonly>{{ $periksa->catatan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="obat">Obat</label>
                            <ul class="list-group">
                                    @foreach ($periksa->detailPeriksa as $detail)
                                        <li class="list-group-item">
                                            {{ $detail->obat->nama_obat ?? 'Obat tidak tersedia' }}
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
