@extends('back.layouts.template')
@section('title', 'Create Article - Admin')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Article</h1>

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

                <form action="{{url('article')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                            <option value="" hidden>--choose--</option>
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="img">Image (Max 2MB) <br>
                    <small><i>width: 850px, height: 350px</i></small>
                    </label>
                    <input type="file" name="img" class="form-control" id="img">

                    <div class="mt-1">
                        <img src="" class="img-thumbnail img-preview" width="100px">
                    </div>
                </div>

                <div class="row">
                    @if(auth()->user()->role == 1)
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="0" hidden>-- chose --</option>
                                <option value="1">Publish</option>
                                <option value="0">Private</option>
                            </select>
                        </div>
                    </div>
                    @else
                    <input type="hidden" name="status" id="status" value="0">
                    @endif
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="publish_date">Publish Date</label>
                            <input type="date" name="publish_date" id="publish_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="float-start">
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
        //ckeditor
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



