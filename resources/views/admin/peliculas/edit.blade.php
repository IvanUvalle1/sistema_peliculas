@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Película</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Editar Película</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Reseña</label>
                        <textarea name="resena" class="form-control">{{ old('resena', $pelicula->resena) }}</textarea>
                        @error('resena')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
              </div>
            </div>
          <!-- /.col-md-6 -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
@endsection