@extends('layouts.app')

@section('template_title')
    Publicacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Publicacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('publicaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Titulo</th>
										<th>Contenido</th>
										<th>Imagen</th>
										<th>Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publicaciones as $publicacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $publicacione->titulo }}</td>
											<td>{{ $publicacione->contenido }}</td>
											<td>{{ $publicacione->imagen }}</td>
											<td>{{ $publicacione->id_usuario }}</td>

                                            <td>
                                                <form action="{{ route('publicaciones.destroy',$publicacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('publicaciones.show',$publicacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('publicaciones.edit',$publicacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $publicaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
