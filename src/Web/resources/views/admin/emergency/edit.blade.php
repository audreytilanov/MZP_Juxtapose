@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Emergency</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Emergency</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
               <form action="{{ route('emergency.edit.save',['id' => $datas->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal" id="validate">
               @csrf
               {{-- <input type="hidden" name="id" id="id" value="{{ $kriteria->id_kriteria }}"> --}}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='id' id="id" value="{{ $datas->id }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='nama' id="nama" value="{{ $datas->nama }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='alamat' id="alamat" required>{{ $datas->alamat }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='no_telp' id="no_telp" value="{{ $datas->no_telp }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jam_buka" class="col-sm-2 col-form-label">Jam Buka</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='jam_buka' id="jam_buka" value="{{ $datas->jam_buka }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name='gambar' id="gambar" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="situs" class="col-sm-2 col-form-label">Situs</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='situs' id="situs" value="{{ $datas->situs }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='lokasi' id="lokasi" value="{{ $datas->lokasi }}" required>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
               <a href="{{ route('common-disease.index') }}" class="btn btn-default ">Cancel</a>
               <input type="submit" class="btn btn-primary" name="submit">
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        </section>
</div>
@endsection