@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Edit Video</h1>
        <form action="{{route('video.update', ['video' => $video->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <textarea id="content" name="title" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">{{$video->title}}</textarea>
            </div>
            <p>Upload Video</p>
            <div class="input-group mb-3">
               
                <input type="file" name="video" class="form-control" id="customFile" />
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-info btn-lg">Update</button>
            </div>
        </form>
    </div>
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


                var gArrayFonts = ['Montserrat','Poppins','Poppins-Bold','Poppins-Black','Poppins-Extrabold','Poppins-Extralight','Poppins-Light','Poppins-Medium','Poppins-Semibold','Poppins-Thin'];

                $('#content').summernote({
                placeholder: "Let's write",
                height: 100,
                fontNames: gArrayFonts,
                fontNamesIgnoreCheck: gArrayFonts,
                fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '20', '22' , '24', '28', '32', '36', '40', '48'],
                toolbar: [
                ['fontname', ['fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture', 'myvideo', 'link', 'table', 'hr']],
                ['misc', ['fullscreen', 'undo', 'redo']]
                ],
                disableDragAndDrop: true,
                shortcut: false
                });
            </script>
@endsection