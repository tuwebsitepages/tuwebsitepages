@extends('adminlte::page')

@section('title', 'Tu WebSite')

@section('content_header')
<h1>Tu WebSite</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img class="img-fluid" src="{{asset('storage').'/'.$proyecto->imagen}}" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $proyecto->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('css')
<link href="css/styles.css" rel="/css/admin_custom.css" />
@stop


@section('js')
<script> </script>
@stop