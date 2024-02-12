@extends('front.layout.template')

@section('title','SMAN 1 GIANYAR - HOME')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow p-3 mb-5 bg-body rounded" data-aos="fade-in" >
                <a href="{{ url('p/'.$latest_post->slug) }}">
                    <img class="card-img-top featured-img" src="{{asset('storage/back/'.$latest_post->img)}}" alt="..." />
                </a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span>{{$latest_post->created_at->format('d-m-Y')}}|</span>
                        <a href="{{url('category/'.$latest_post->Category->slug)}}" class="ml-4">
                            <span >{{$latest_post->Category->name}}</span>
                        </a>
                        <span>|({{$latest_post->views}})</span>
                    </div>
                    <h2 class="card-title">{{$latest_post->title}}</h2>
                    <p class="card-text">
                        {!!Str::limit(strip_tags($latest_post->desc),200,'...')!!}
                        {{-- {!! $latest_post->desc !!} --}}
                    </p>
                    <a class="btn btn-primary" href="{{ url('p/'.$latest_post->slug) }}">Read more →</a>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $item)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{asset('storage/back/'.$item->img)}}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted">
                                {{$item->created_at->format('d-m-Y')}} |
                                <a href="{{url('category/'.$item->Category->slug)}}">{{$item->Category->name}}</a>
                                <span>|({{$item->views}})</span>
                            </div>
                            <h2 class="card-title h4">{{$item->title}}</h2>
                            <p class="card-text">{!!Str::limit(strip_tags($item->desc),200,'...')!!}</p>
                            <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">>Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div>
                {{$articles->links()}}
            </div>

        </div>

       @include('front.layout.side-widget')


    </div>
</div>

@endsection


