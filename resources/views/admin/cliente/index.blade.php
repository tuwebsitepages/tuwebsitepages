
@php
use Carbon\Carbon;
@endphp


@extends('adminlte::page')

@section('title', 'Tu WebSite')

@section('content_header')
<h1>Tu WebSite</h1>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Cliente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th>Dominio</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Creado</th>                        
                                    <th>Restante</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    @php
                                    $createdAt = Carbon::parse($cliente->created_at)->setTimezone('America/Argentina/Buenos_Aires');
                                    $now = Carbon::now()->setTimezone('America/Argentina/Buenos_Aires');
                                    $nextAnniversary = $createdAt->copy()->addYear();
                                    $diff = $nextAnniversary->diff($now);
                                    $remainingMonths = $diff->format('%m');
                                    $remainingDays = $diff->format('%d');
                                    @endphp

                                    <td>{{ $cliente->nombre }}</td>
                                    <td> <img class="img-fluid" src="{{asset('storage').'/'.$cliente->imagen}}" width="100" alt=""></td>
                                    <td>{{ $cliente->descripcion }}</td>
                                    <td>{{ $cliente->url }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ Carbon::parse($cliente->created_at)->setTimezone('America/Argentina/Buenos_Aires')->format('d/m/Y') }}</td>
                                    <td>
                                        @if ($now < $nextAnniversary) {{ $remainingMonths }} meses y {{ $remainingDays }} días @else Ya ha pasado un año desde la creación @endif </td>
                                    <td>
                                        <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Quieres borrar esto?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $clientes->links() !!}
        </div>
    </div>
</div>
@endsection



@section('css')
<link href="css/styles.css" rel="/css/admin_custom.css" />
@stop


@section('js')
<script> </script>
@stop
