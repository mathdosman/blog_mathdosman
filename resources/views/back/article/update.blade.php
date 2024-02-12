@extends('back.layouts.template')
@section('title', 'Update Article - Admin')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Article</h1>

  </div>


  <div class="containe mt-3r">
    <div class="row">

        <div class="col">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{url('article/'.$article->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                <input type="hidden" name="oldImg" value="{{$article->img}}">

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" value="{{old('title', $article->title)}}" class="form-control" name="title" id="title">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $item)
                            @if ($item->id==$article->category_id)
                            <option value="{{$item->id}}" selected>{{$item->name}}</option>
                            @else
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="myeditor" cols="100" rows="100" class="form-control">{{old('desc', $article->desc)}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="img">Image (Max 2MB)</label>
                    <input type="file" name="img" class="form-control" id="img">
                    <small>Gambar Lama</small> <br>
                    <div class="mt-1">
                        <img src="{{ asset('storage/back/'.$article->img)}}" class="img-thumbnail img-preview" width="100px">
                    </div>
                </div>

                <div class="row">
                    @if(auth()->user()->role == 1)
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $article->status == 1 ? 'selected' : null}}>Publish</option>
                                <option value="0" {{ $article->status == 0 ? 'selected' : null}} >Private</option>
                            </select>
                        </div>
                    </div>
                    @else
                    <input type="hidden" name="status" id="status" value="{{$article->status}}">
                    @endif
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="publish_date">Publish Date</label>
                            <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{old('publish_date', $article->publish_date)}}">
                        </div>
                    </div>
                </div>
                <div class="float-start">
                    <a href="{{url('article')}}" class="btn btn-secondary" >Back</a>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
                </form>

        </div>
    </div>
  </div>

</main>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script>
        var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=', filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=', clipboard_handleImages: false
        }
    </script>

    <script>
        CKEDITOR.replace( 'myeditor', options );

        //img-preview
        $("#img").change(function() {
            previewImage(this);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush



