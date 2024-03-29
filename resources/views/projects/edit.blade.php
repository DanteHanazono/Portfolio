@extends('layouts.app')

@section('template_title')
{{__('Update')}} Proyecto
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-titile">{{__('Update')}} Proyecto</span>
                </div>
                <div class="card-body">
                    <form action="{{route('projects.update', $project->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        {{method_field('PATCH')}}
                        @csrf
                        @include('projects.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
