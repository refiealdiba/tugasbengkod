@extends('layouts.main')

@section('title')
    Obat
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaObat">Nama Obat</label>
                    <input type="text" class="form-control" id="namaObat" placeholder="Paracetamol...">
                  </div>
                  <div class="form-group">
                    <label for="kemasan">Kemasan</label>
                    <input type="text" class="form-control" id="kemasan" placeholder="Botol...">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="10000...">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Dokter</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Kemasan</th>
                                <th>Harga</th>                    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Paracetamol</td>
                                <td>Botol</td>
                                <td>5000</td>
                            </tr>
                        </tbody>
                    </table>
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
