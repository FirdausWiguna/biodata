@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Guru Page</h1>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Guru</h3>

        
      </div>
      <div class="card-body">
        <form action="{{ route('guru.index') }}" method="get">
          <div class="input-group mb-3">
            <input type="search" name="search" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ $vcari }}">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ route('guru.index')}}">
              <button class="btn btn-danger">Reset Filter</button></a>
          </div>
          <br>
          </form>
        @if($message = Session::get('succes'))
        <div class="alert alert-succes">{{ $message }}</div>
        @endif
        <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
        <a href="{{ url('pdfi')}}"
        class="btn btn-primary">Unduh PDF</a>
        <br><br>
        <table class="table table-striped table-bordered">
          <tr>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Mapel</th>
            <th>Aksi</th>
          </tr>
          @if(count($guruM) > 0)
          @foreach ($guruM as $guru)
          <tr>
                <td>{{$guru->nip}}</td>  
                <td>{{$guru->namaguru}}</td>  
                <td>{{$guru->mapel}}</td>  
                      <td><a href="{{ route('guru.edit', $guru->id)}}" class="btn btn-xs btn-warning">Edit</a>
                      
                      <form action="{{ route( 'guru.destroy', $guru->id) }}" method="POST">
                        @csrf
                        @method('delete')
                      <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                      </form>
                </td>  
          </tr>    
          @endforeach
          @else
          <tr>
            <td colspan="S">Data Tidak Ditemukan</td>
          </tr>
          @endif
        </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection