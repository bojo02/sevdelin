@extends('layouts.base')

@section('body')

<style>
    .text-secondary {
    color: #3d5d6f;
  }
  
  .h4,
  h4 {
    font-size: 1.2rem;
  }

  h2 {
    color: #333;
  }
  
  .fa,
  .fas {
    font-family: 'FontAwesome';
    font-weight: 400;
    font-size: 1.2rem;
    font-style: normal;
  }
  
  .right-0 {
    right: 0;
  }
  
  .top-0 {
    top: 0;
  }
  
  .h-100 {
    height: 100%;
  }
  
  a.text-secondary:focus,
  a.text-secondary:hover {
    text-decoration: none;
    color: #22343e;
  }
  
  #accordion .fa-plus {
    transition: -webkit-transform 0.25s ease-in-out;
    transition: transform 0.25s ease-in-out;
    transition: transform 0.25s ease-in-out, -webkit-transform 0.25s ease-in-out;
  }
  
  #accordion a[aria-expanded=true] .fa-plus {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }
</style>

<div id="main" style=" display:flex; flex-direction:column; 
            justify-content:space-between;" class="container" style="text-align:center">
    <div id="content">
        <div class="row">
            <div class="col-sm">
                <div class="presentation-video">
                    <h1 style="font-size:35px;">{!! $presentation_title->content !!} {!! $location->name !!}</h1>
                    <video  id="video_present" controls poster="">
                    <source src="{{$location->rate->video->path}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> 
                </div>
            </div>
        </div>
        <div class="presentation-form">
            <div class="row center bottom up ">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-12 test">
                            <div class="left">
                            <div class="form-check">
                                <input onclick="javascript:yesnoCheck();" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label bold" for="exampleRadios1">
                                    I would like to proceed
                                </label>
                                </div>
                                <div class="form-check">
                                <input onclick="javascript:yesnoCheck();" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label bold" for="exampleRadios2">
                                    I'm not happy to proceed
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="">
                        <div class="presentation-button">
                            <a href="{{route('partner')}}" id="button" style="background-color:#28ABB1;" class="btn btn-primary block shadow-none" type="submit">Proceed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
       
        </div>

        @include('pages.questions.questions')
            
    </div>
    
</div>

<script type="text/javascript">
     if (document.getElementById('exampleRadios1').checked) {
            $("#button").attr('href', '{{route("partner")}}');
        } else {
            $("#button").attr('href', '{{route("unhappy")}}');
        }

    function yesnoCheck() {
        if (document.getElementById('exampleRadios1').checked) {
            $("#button").attr('href', '{{route("partner")}}');
        } else {
            $("#button").attr('href', '{{route("unhappy")}}');
        }
    }

</script>

@endsection