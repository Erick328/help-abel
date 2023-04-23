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
                            <a class="btn btn-primary" href="{{ route('categorias.create') }}"> Crear Categoria</a>
                            <table class="table table-striped mt-2" style="width: 100%">
                                <thead style="background-color: #6777eF">
                                    <tr>
                                        <th style="color:#fff">Nombre</th>
                                        <th style="color: #fff">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($categorias as $cat)
                                        <tr>
                                            <td>{{$cat->nombre}}</td>
                                            <td>
                                                <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST">
                                                    <a class="btn btn-secondary" href="{{ route('categorias.edit', $cat->id) }}">Editar</a>  
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