@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ask Doctor</h1>
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
                <h3 class="card-title">Edit Ask Doctor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{ route('doctor.edit.save',['id' => $datas->id]) }}" enctype="multipart/form-data" method="POST" class="form-horizontal" id="validate">
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
                    <label for="tipe_dokter" class="col-sm-2 col-form-label">Tipe Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='tipe_dokter' id="tipe_dokter" value="{{ $datas->tipe_dokter }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jam_praktik" class="col-sm-2 col-form-label">Jam Praktik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='jam_praktik' id="jam_praktik" value="{{ $datas->jam_praktik }}" placeholder="Ex. 08:00 - 10:00" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name='gambar' id="gambar" value="{{ $datas->gambar }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="link_wa" class="col-sm-2 col-form-label">Link Whatsapp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='link_wa' id="link_wa" value="{{ $datas->link_wa }}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
               <a href="{{ route('doctor.index') }}" class="btn btn-default ">Cancel</a>
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