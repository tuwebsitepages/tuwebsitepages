
@extends('adminlte::page')

@section('title', 'Tu WebSite')

@section('content_header')
<h1>Tu WebSite</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                           

                            @include('cliente.form')

                        </form>
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