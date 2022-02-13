@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Common Disease</h1>
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
                <h3 class="card-title">Edit Drugs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{ route('drugs.edit.save',['id'=>$data->id]) }}" method="POST" class="form-horizontal" id="validate" enctype="multipart/form-data">
               @csrf
               {{-- <input type="hidden" name="id" id="id" value="{{ $kriteria->id_kriteria }}"> --}}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                      <input value="{{ $data->slug }}" type="text" class="form-control" name='slug' id="slug" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <input value="{{ $data->kategori->id }}" type="text" class="form-control" name='kategori' id="kategori" required>
                      <p>{{ $data->kategori->nama }}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input value="{{ $data->nama }}" type="text" class="form-control" name='nama' id="nama" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar Lama</label>
                    <img src="{{ URL::asset('drugs/'.$data->gambar) }}" alt="" width="200px" height="auto">
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name='gambar' id="gambar" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input value="{{ $data->harga }}" type="harga" class="form-control" name='harga' id="harga" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">satuan</label>
                    <div class="col-sm-10">
                      <input value="{{ $data->satuan }}" type="text" class="form-control" name='satuan' id="satuan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='deskripsi' id="deskripsi" required>{{ $data->deskripsi }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Indikasi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='indikasi' id="indikasi" required>{{ $data->indikasi }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Komposisi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='komposisi' id="komposisi" required>{{ $data->komposisi }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Dosis</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='dosis' id="dosis" required>{{ $data->dosis }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Warning</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='warning' id="warning" required>{{ $data->warning }}</textarea>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
               <a href="{{ route('drugs.index') }}" class="btn btn-default ">Cancel</a>
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