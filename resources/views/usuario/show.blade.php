@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $usuario->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $usuario->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nac:</strong>
                            {{ $usuario->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Contras:</strong>
                            {{ $usuario->contras }}
                        </div>
                        <div class="form-group">
                            <strong>Email Verificado:</strong>
                            {{ $usuario->email_verificado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Usuario:</strong>
                            {{ $usuario->id_tipo_usuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
