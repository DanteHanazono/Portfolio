@extends('layouts.app')

@section('template_title')
{{ $projects->title }} "{{ __('Show') Proyecto" }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Proyecto</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $projects->title }}
                    </div>
                    <div class="form-group">
                        <strong>Imagen:</strong>
                        <br />
                        <img class="img-fluid" src=" {{$projects->image}} " alt="..." style="width:400px; height:200px" />
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $projects->description }}
                    </div>
                    <div class="form-group">
                        <strong>Url:</strong>
                        {{ $projects->url }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
