@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ route('articulos.create') }}"> Crear Articulos</a>
                            <table class="table table-striped mt-2" style="width: 100%">
                                <thead style="background-color: #6777eF">
                                    <tr>
                                        <th style="color:#fff">Nombre</th>
                                        <th style="color:#fff">Precio</th>
                                        <th style="color:#fff">Stock</th>
                                        <th style="color:#fff">Categoria</th>
                                        <th style="color: #fff">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($articulos as $articulo)
                                        <tr>
                                            <td>{{$articulo->nombre}}</td>
                                            <td>{{$articulo->precio}}</td>
                                            <td>{{$articulo->stock}}</td>
                                            <td>{{$articulo->Categorias['nombre']}}</td>
                                            <td>
                                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                                                    <a class="btn btn-secondary" href="{{ route('articulos.edit', $articulo->id) }}">Editar</a>  
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar </button>
                                                </form>
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
    </section>
@endsection