<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #000000;">
    <div class="container">

        <img src="{{url('front/img/logodosman.png')}}" alt="" class="" width="5%">
        <a class="navbar-brand logofont" href="{{url('/')}}" >
            <span class="">DOSMAN</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item "><a class="nav-link navbar-coba " href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link navbar-coba" href="{{url('/articles')}}">Article</a></li>
                <li class="nav-item"><a class="nav-link navbar-coba" href="{{url('/about')}}">About</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-coba" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @foreach ($categoriesx as $item)
                        <li><a class="dropdown-item" href="{{url('category/'.$item->slug)}}">{{$item->name}}</a></li>
                        @endforeach

                        <hr class="dropdown-divider">
                      <li><a class="dropdown-item" href="{{url('category/')}}">All Categories</a></li>
                    </ul>
                  </li>
                <li class="nav-item"><a class="nav-link navbar-coba" href="{{url('/contact')}}">Contact</a></li>
                {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li> --}}
                <li class="nav-item"><a class="nav-link navbar-coba" aria-current="page" href="{{url('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
