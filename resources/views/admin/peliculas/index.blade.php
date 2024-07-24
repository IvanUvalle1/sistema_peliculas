@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de Peliculas</h1>
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
                <h5 class="m-0">Peliculas</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Titulo de Pelicula</th>
                            <th>Sinopsis</th>
                            <th>Categoria</th>
                            <th>Poster</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($peliculas as $pelicula)
                        <tr>
                            <td>{{$pelicula->titulo_pelicula}}</td>
                            <td>{{$pelicula->sinopsis}}</td>
                            <td>{{$pelicula->categoria}}</td>
                            <td>
                              <img src="{{ asset('posters/' . $pelicula->poster) }}" width="100px" alt="{{ $pelicula->titulo }}">
                            </td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <form action="{{ route('peliculas.edit', $pelicula->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="btn btn-warning">Editar</button>
                              </form>
                              <form action="{{ route('peliculas.show', $pelicula->id) }}" method="GET" style="display:inline;">
                                <button type="submit" class="btn btn-info">Detalles</button>
                              </form>
                              <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                              </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
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