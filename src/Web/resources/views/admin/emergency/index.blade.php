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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Emergency</h3>
                        </div>
                    <div class="card-body">
                        <a href="{{ route('emergency.add') }}" class="btn btn-success" style="margin-bottom: 20px;" >Tambah Emergency</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Jam Buka</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Situs</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Dibuat</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data) 
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama   }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->jam_buka }}</td>
                                        <td><img src="{{URL::asset('emergency/'.$data->gambar)}}" alt="{{ $data->gambar }}" width="170px"></td>
                                        <td>{{ $data->situs }}</td>
                                        <td>{{ $data->lokasi }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>
                                            <a href="{{ route('emergency.edit',['id'=>$data->id]) }}" class="btn btn-sm btn-primary" style="margin-bottom: 20px;" >Edit</a>
                                            <a class="btn btn-sm btn-danger delete" href="#" data-id="{{$data->id}}" ><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    <!-- /.container-fluid -->
    </section>
</div>
<script src="{{ URL::asset('Adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<script
        src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
        crossorigin="anonymous">
</script>
<script>
    $('.delete').click( function(){
      var dataId = $(this).attr('data-id');
      Swal.fire({
    title: 'Apakah Yakin Kamu Yakin ?',
    text: "Kamu Akan Menghapus Data Ini ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "/admin/emergency/delete/"+dataId+"/"
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  });
  
  });
      
  </script>
@endsection