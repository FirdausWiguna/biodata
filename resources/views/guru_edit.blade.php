@extends('adminlte')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Guru Page</h1>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Guru</h3>

        
      </div>
      <div class="card-body">
        <a href="{{ route('guru.index') }}" 
        class="btn btn-default">Kembali</a>
        <br><br>
        
        <form action="{{ route( 'guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">NIP</label>
                <input name="nip" type="text" class="form-control" placeholder="..." value="{{ $guru->nip }}">
                @error('nip')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Nama Guru</label>
                <input name="namaguru" type="text" class="form-control" placeholder="..." value="{{ $guru->namaguru }}">
                @error('namaguru')
                <p>{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="">Mapel</label>
                <input name="mapel" type="text" class="form-control" placeholder="..."
                value="{{ $guru->mapel }}">
                @error('mapel')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Edit">

        </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection