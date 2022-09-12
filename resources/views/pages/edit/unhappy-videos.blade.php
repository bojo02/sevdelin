@extends('layouts.admin')

@section('body')

<div class="container">
  <div class="row">
    <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-sm">
            <div class="form-group">
                <label for="exampleFormControlInput1">Home Title</label>
                <input type="text" name="title" value="{{$home_title->content}}" class="form-control" id="exampleFormControlInput1" placeholder="">
             </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Home content</label>
                <textarea class="form-control" name="content" id="content" rows="3">{{$home_description->content}}</textarea>
            </div>
            <div>
                <label class="form-label" for="customFile">Upload Image</label>
                <input name="photo" type="file" class="form-control" id="customFile" />
                <br>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </div>
    </form>
  </div>
</div>

 <!-- Summernote CSS - CDN Link -->
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
            <!-- //Summernote CSS - CDN Link -->

              
              
            <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <!-- Summernote JS - CDN Link -->
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#content").summernote();
                    $('.dropdown-toggle').dropdown();
                });
            </script>
@endsection