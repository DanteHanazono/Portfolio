@extends('layouts.template')
@section('content')

@foreach($projects as $project)
<!-- Portfolio Item 1-->
<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{$project->id}}">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="{{ asset('storage/images/img/portfolio').'/'.$project->image}}" alt="..." style="width:400px; height:200px" />
    </div>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" aria-labelledby="portfolioModal{{$project->id}}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body pb-5">
                <div class="container">
                    <!-- Portfolio Item Heading -->
                    <!-- Portfolio Item Row -->
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-fluid" src="{{ asset('storage/images/img/portfolio').'/'.$project->image}}" alt="..." style="width:700px; height:500px" alt="">
                        </div>
                        @if(is_null($project->url) || is_null($project->git_url))
                        <div class="col-md-4">
                            <h3 class="my-3">{{$project->title}}</h3>
                            <p>{{$project->description}}</p>

                            @if(!is_null($project->url))
                            <a href="{{$project->url}}" class="btn btn-primary" target="_blank">
                                <i class="fas fa-globe"></i>
                                Proyecto
                            </a>
                            @endif

                            @if(!is_null($project->git_url))
                            <a href="{{$project->git_url}}" class="btn btn-primary" target="_blank">
                                <img height="20" width="20" src="https://cdn.simpleicons.org/github/ffffff">
                                Repositorio GitHub
                            </a>
                            @endif
                        </div>
                        @endif
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
