@extends('layouts.base')

@section('body')


<div class="container">
  <div class="row">
  <div>
    <h1 class="center" id="unhappy-title">{!! $unhappy_title->content !!}</h1>
  </div>
    <div class="col-sm-6 up">
        <div class="">
            <p id="unhappy-description" class="bold">{!! $unhappy_description_1->content !!}</p>
        </div>
    </div>
    <div class="col-sm-6 image-column">
        <div class="unhappy-div-image">
          <img id="unhappy-image" src="{{asset($photo->path)}}" alt="">    
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
        <form id="sub-form" enctype="multipart/form-data" class="unhappy-section" action="{{route('subscribe')}}" method="POST"> 
            @method('POST')
            @csrf
            <p class="bold center font-size:16px;" style="font-size:18px; margin-bottom:0px;">Subscribe to receive the best offers</p>
            <div class="input-group input-group-lg">
                <input id="sub-mail" type="email" name="email" placeholder="Your email" required class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
                <br>
            <div class="input-group input-group-lg">
                <button style="background-color:#28ABB1;" class="btn btn-lg btn-primary unhappy-button" type="button">Subscribe</button>
            </div>
        </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
        <h1 class="bold" style="text-align:center; margin-bottom:50px;" id="unhappy-title">{!! $unhappy_description_2->content !!}</h1>
    </div>
  </div>
</div>

<script type="text/javascript">

$('#sub-form button').on('click',function(e){
    e.preventDefault();

	  let email = $('#sub-mail').val();
	
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }                    
    });
    $.ajax({
      
		url: "{{route('subscribe')}}",
      type:"post",
      data:{
		email:email,
      },
      success: function(data) {
        $('.flash-message').html(data.alert);    
        window.scrollTo({ top: 0, behavior: 'smooth' });
      },
      });
    });
  

  </script>

@endsection

