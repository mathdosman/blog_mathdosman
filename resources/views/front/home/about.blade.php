@extends('front.layout.template')

@section('title','SMAN 1 GIANYAR - ABOUT')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
                <a href="{{asset('front/img/logodosman1.png')}}" class="text-center">
                    <img class="about-img" src="{{asset('front/img/logodosman1.png')}}" alt="..." />
                </a>

                <div class="card-body">
                    <div class="small text-muted">
                        <span>{{date('d-m-Y')}}|</span>
                    </div>
                    <h2 class="card-title">PROFIL SMAN 1 GIANYAR</h2>
                    <p class="card-text">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam, atque illo impedit consequuntur officia assumenda repellendus ratione non magni quasi, porro iure eius ducimus, at consectetur quam nemo enim.
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, optio. Ab saepe sed impedit? Id cumque esse consequatur, nisi ex quod sapiente, harum maiores deserunt sequi impedit earum omnis fugit!
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quia, optio omnis doloremque ipsa error dolorum deleniti impedit eius quibusdam provident ipsam nobis velit veniam tempora iusto saepe harum sed.
                    </p>

                </div>
            </div>

        </div>

       @include('front.layout.side-widget')


    </div>
</div>

@endsection


