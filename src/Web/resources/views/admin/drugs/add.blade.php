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
                <h3 class="card-title">Tambah Drugs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{ route('drugs.add.save') }}" method="POST" class="form-horizontal" id="validate" enctype="multipart/form-data">
               @csrf
               {{-- <input type="hidden" name="id" id="id" value="{{ $kriteria->id_kriteria }}"> --}}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='slug' id="slug" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                      <option selected>Open this select menu</option>
                      @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='nama' id="nama" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="harga" class="form-control" name='harga' id="harga" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name='gambar' id="gambar" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">satuan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name='satuan' id="satuan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='deskripsi' id="deskripsi" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Indikasi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='indikasi' id="indikasi" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Komposisi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='komposisi' id="komposisi" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Dosis</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='dosis' id="dosis" required></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Warning</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name='warning' id="warning" required></textarea>
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