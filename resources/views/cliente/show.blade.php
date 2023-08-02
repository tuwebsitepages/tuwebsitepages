@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img class="img-fluid" src="{{asset('storage').'/'.$cliente->imagen}}" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $cliente->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $cliente->url }}
                        </div>
                        <div class="form-group">
                            <strong>Creado:</strong>
                            {{ $cliente->created_at->format('d/m/Y H:i:s') }}
                        </div>
                       


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
