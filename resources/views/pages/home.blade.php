@extends('layouts.base')

@section('body')

@include('pages.reach.reach')

<div class="container">
  <div class="row">

    <div class="col-sm">
     <div class="title">
         <p>{!! $home_title->content !!}</p>
     </div>
    </div>

  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div id="main_image">
            <img id="main_img" src="{{asset($photo->path)}}" alt="">
            <br> <br>
        </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="">
            <p>
              {!! $home_description->content !!}
            </p>
        </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
 
    <div class="col">
    <div id="form_main">
      <form id="myform" action="{{route('presentation')}}" method="POST">
        @method('POST')
        @CSRF
      <div class="radios">
            <div class="form-check">
                <input onclick="javascript:yesnoCheck();" id="flexRadioDefault1" style="background-color:#28ABB1;" checked class="form-check-input" type="radio" name="flexRadioDefault"/>
                <label class="form-check-label bold" for="flexRadioDefault1"> I would like more information  </label>
            </div>
            <div id="menu">
                <select class="form-control" name="location" aria-label="Default select example">
              @foreach ($regions as $region)
                <optgroup label="{{$region->name}}">
                @foreach ($region->locations as $location)
                  <option value="{{$location->id}}" selected>{{$location->name}}</option>
                @endforeach
                  </optgroup>
                  @endforeach
              </select>
             
            </div>
            <div class="form-check">
                <input onclick="javascript:yesnoCheck();" id="flexRadioDefault2" style="background-color:#28ABB1;" class="form-check-input" type="radio" name="flexRadioDefault"/>
                <label class="form-check-label bold" for="flexRadioDefault2">I'm already aware of the terms and conditions </label>
            </div>
            <br>
            <div class="btn-1 form-check">
              <button style="background-color:#28ABB1;" class="btn btn-primary block" type="submit">Proceed</button>
            </div>
            </form>
        </div>
        </div>
        
    </div>
    </div>
  </div>
</div>

<script type="text/javascript">

if (document.getElementById('flexRadioDefault1').checked) {
        document.getElementById('menu').style.display = 'block';
        $("#myform").attr('action', '{{route("presentation")}}');
        $("#myform").attr('method', 'post');
    } else {
        document.getElementById('menu').style.display = 'none';
        $("#myform").attr('action', '{{route("partner")}}');
        $("#myform").attr('method', 'get');

    }

function yesnoCheck() {
    if (document.getElementById('flexRadioDefault1').checked) {
        document.getElementById('menu').style.display = 'block';
        $("#myform").attr('action', '{{route("presentation")}}');
        $("#myform").attr('method', 'post');
    } else {
        document.getElementById('menu').style.display = 'none';
        $("#myform").attr('action', '{{route("partner")}}');
        $("#myform").attr('method', 'get');

    }
}

</script>




@endsection