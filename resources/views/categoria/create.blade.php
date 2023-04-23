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
                            <form action="{{ route('categorias.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-users"> Nombre</i>
                                                </span>
                                                <input type="text" id="nombre" name="nombre" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <a href="{{route('categorias.index')}}" class="btn btn-danger">Cancelar</a>
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