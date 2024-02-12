@extends('front.layout.template')

@section('title','SMAN 1 GIANYAR - ARTICLE')

@section('content')
<div class="container">
    <div class="row">
        <div class="mb-3">
            <form action="{{route('search')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" name="keyword" type="text" placeholder="Search articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                </div>
            </form>
        </div>
        <div>
            @if ($keyword != null)
                <h5>keyword: <b>{{$keyword}}</b></h5>
                <a href="{{url('articles')}}" class="btn btn-secondary mb-3">Reset</a>
            @endif
        </div>

        @forelse ($articles as $item)
        <div class="col-4" data-aos="fade-up">
            <div class="card mb-4 shadow-sm">
                <a href="{{ url('p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{asset('storage/back/'.$item->img)}}" alt="..." /></a>
                <div class="card-body card-height">
                    <div class="small text-muted">
                        {{$item->created_at->format('d-m-Y')}} |
                        <a href="{{url('category/'.$item->Category->slug)}}">{{$item->Category->name}}</a>
                    </div>
                    <h2 class="card-title h4">{{$item->title}}</h2>
                    <p class="card-text">{!!Str::limit(strip_tags($item->desc),200,'...')!!}</p>
                    <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">>Read more →</a>
                </div>
            </div>
        </div>
        @empty
        <h3 class="text-danger text-center border">Not Found</h3>
        @endforelse
    </div>
    {{$articles->links()}}
</div>

@endsection



