@extends('front.layout.template')

@section('title','SMAN 1 GIANYAR - CONTACT')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow p-1 bg-body rounded">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.553868980786!2d115.33097977576023!3d-8.542617286589957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2165e02f9c31f%3A0x4aa95e83ead67ab2!2sSMA%20Negeri%201%20Gianyar!5e0!3m2!1sid!2sid!4v1705650898829!5m2!1sid!2sid" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="card-body" data-aos="zoom-in">
                    <div class="small text-muted">
                        <span>{{date('d-m-Y')}}|</span>
                    </div>
                    <h2 class="card-title">CONTACT</h2>
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


