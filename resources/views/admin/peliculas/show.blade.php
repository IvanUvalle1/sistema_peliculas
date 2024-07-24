@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Detalles de la Película</h1>
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
                        <h5 class="m-0">{{ $pelicula->titulo_pelicula }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Título</label>
                            <p>{{ $pelicula->titulo_pelicula }}</p>
                        </div>
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <p>{{ $pelicula->sinopsis }}</p>
                        </div>
                        <div class="form-group">
                            <label>Reseña</label>
                            <p>{{ $pelicula->resena }}</p>
                        </div>
                        <div class="form-group">
                            <label>Categoría</label>
                            <p>{{ $pelicula->categoria }}</p>
                        </div>
                        <div class="form-group">
                            <label>Poster</label>
                            <img src="{{ asset('posters/' . $pelicula->poster) }}" width="300px" alt="{{ $pelicula->titulo_pelicula }}">
                        </div>
                        <div class="form-group">
                            <label>Fecha de Estreno</label>
                            <p>{{ $pelicula->fecha_estreno }}</p>
                        </div>
                        <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Regresar</a>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection