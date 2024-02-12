 <!-- Side widgets-->
 <div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Search</div>
        <div class="card-body" >
            <form action="{{route('search')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" name="keyword" type="text" placeholder="Search articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-sm-6 fw-bold">
                    <a style="text-decoration: none" href="{{url('category/'.$item->slug)}}" class="badge bg-primary">{{$item->name}} ({{$item->articles_count}})</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Popular Post</div>
        <div class="card-body">
            @foreach ($popular_post as $item)
            <div class="card mb-3" >
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset('storage/back/'.$item->img)}}" alt="{{$item->title}}" class="img-thumbnail">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <p class="card-title">
                                <a href="{{url('p/'.$item ->slug)}}"><h5>{{$item->title}}</h5></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
