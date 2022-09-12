@extends('layouts.admin')

@section('body')

<div class="container">
  <div class="row">
    <form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-sm">
            <div class="form-group">
                <label for="exampleFormControlInput1">Partner Title</label>
                <textarea type="text" id="partner_title" name="partner_title" class="form-control" id="exampleFormControlInput1" placeholder="">{{$partner_title->content}}</textarea>
             </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Partner description 1</label>
                <textarea class="form-control" name="partner_description_1" id="content" rows="3">{!! $partner_description_1->content !!}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Partner description 2</label>
                <textarea class="form-control" name="partner_description_2" id="content2" rows="3">{!! $partner_description_2->content !!}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Partner description 3</label>
                <textarea class="form-control" name="partner_description_3" id="content3" rows="3">{!! $partner_description_3->content !!}</textarea>
            </div>
            </div>
                <label class="form-label" for="customFile">Upload Image</label>
                <input name="photo" type="file" class="form-control" id="customFile" />
                <br>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Partner Video Title</label>
                <textarea class="form-control" id="partner_videos_title" name="partner_videos_title" id="content" rows="3">{!! $partner_videos_title->content !!}</textarea>
            </div>
            <div>
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

var gArrayFonts = ['Montserrat','Poppins','Poppins-Bold','Poppins-Black','Poppins-Extrabold','Poppins-Extralight','Poppins-Light','Poppins-Medium','Poppins-Semibold','Poppins-Thin'];

                $('#partner_title').summernote({
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
                
                $('#partner_videos_title').summernote({
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

                $('#content3').summernote({
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

                $('#content2').summernote({
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