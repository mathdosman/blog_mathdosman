@extends('front.layout.template')

@section('title','SMAN 1 GIANYAR -'.$article->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8" data-aos="fade-up">
            <div class="card mb-4 shadow">
                <a href="{{ url('p/'.$article->slug) }}">
                    <img class="card-img-top single-img" src="{{asset('storage/back/'.$article->img)}}" alt="{{$article->title}}"  />
                </a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span class="ml-2">{{$article->created_at->format('d-m-Y')}}</span>
                        <a href="{{url('category/'.$article->Category->slug)}}" class="ml-4">
                            <span >{{$article->Category->name}}</span>
                        </a>
                        <span class="ml-2">({{$article->views}})</span>
                    </div>
                    <h1 class="card-title">{{$article->title}}</h1>
                    <p class="card-text">
                        {!! $article->desc !!}
                    </p>
                </div>
            </div>

        </div>

       @include('front.layout.side-widget')


    </div>
</div>

@endsection



