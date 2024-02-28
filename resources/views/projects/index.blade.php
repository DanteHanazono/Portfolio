@extends('layouts.app')

@section('template_title')
Proyectos
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Proyectos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                <i class="fa-solid fa-file-circle-plus"></i> {{ __('Nuevo Proyecto') }}
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
                                    <th>Url</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $project->title }}</td>
                                    <td><img class="img-fluid rounded mb-5" style="width:100px" src="{{ asset('storage/images/img/portfolio').'/'.$project->image}}"></td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->url }}</td>

                                    <td>
                                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('projects.show', $project->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('projects.edit', $project->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $projects->links() !!}
        </div>
    </div>
</div>
@endsection
