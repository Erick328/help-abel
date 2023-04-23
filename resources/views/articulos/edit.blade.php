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
                            <form action="{{ route('articulos.update', $articulo->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-users"> Nombre</i>
                                                </span>
                                                <input type="datetime" id="nombre" name="nombre" class="form-control" required placeholder="Insertar nombre" value="{{old('nombre',$articulo->nombre)}}">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-users"> Precio</i>
                                                </span>
                                                <input type="number" id="precio" name="precio" class="form-control" required min="1" placeholder="1.0" value="{{old('precio',$articulo->precio)}}">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-users"> Stock</i>
                                                </span>
                                                <input type="number" id="stock" name="stock" class="form-control" required min="1" required value="{{old('stock',$articulo->stock)}}"">
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-bars"> Contacto</i>
                                                    </span>
                                                    <select name="idCategoria" id="idCategoria" class="form-control">
                                                        @foreach ($categorias as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <a href="{{route('articulos.index')}}" class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection