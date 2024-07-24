@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inserta los datos de la Película</h1>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Mostrar mensajes de éxito -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Peliculas</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/admin/peliculas') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Título de la película</label>
                                        <input type="text" name="titulo_pelicula" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <input type="text" name="categoria" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Reseña</label>
                                        <textarea name="resena" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea name="sinopsis" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Poster</label>
                                        <input type="file" name="poster" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de Estreno</label>
                                        <input type="date" name="fecha_estreno" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="" class="btn btn-danger">Cancelar</a>
                                    <input type="submit" class="btn btn-success" value="Registrar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection