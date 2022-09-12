@extends('layouts.base')

@section('body')


<div class="container up bottom">
  <div class="row center">
    <div class="col-sm">
      <p class="bold partner_title">{!! $partner_title->content !!}</p>
    </div>
  </div>

  <div class="row center">
  <div class="col-sm-6">
        <div class="row center">
            <div class="col-sm">
                <p style="font-family:Montserrat;">{!! $partner_description_1->content !!}</p>

                <p class="bold">{!! $partner_description_2->content !!}</p>
            </div>
        </div>
        <div class="row center">
            <div class="col-sm">
                <div class="row center up">
                    <div class="col-sm-6 play" >
                        <a href="https://play.google.com/store/apps/details?id=com.fdl.startup">
                            <img class="playstore" src="{{asset('images/googleplay.png')}}" alt="">
                        </a>
                        <div class="googleplay-display"style="width:100%;">
                            <img class="playstore" src="{{asset('images/android.jpg')}}" alt="">
                        </div>
                    </div>
                        
                    <div class="col-sm-6">
                        <div class="col-sm app-store">
                            <a href="https://apps.apple.com/gb/app/fdl-startup/id1530456771">
                                <img class="appstore" src="{{asset('images/appstore.png')}}" alt="">
                            </a>

                            <div class="appstore-display" style="width:100%;">
                            <img class="playstore" src="{{asset('images/iphone.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-sm-6">
    <div class="unhappy-div-image">
          <img id="unhappy-image" src="{{asset($photo->path)}}" alt="">    
        </div>
    </div> 
</div>

    <div class="row up">
        <div class="col-sm">
            <p class="">{!! $partner_description_3->content !!}</p>
        </div>
    </div>
    <div class="row up">
        <div class="col-sm center">
            <h1 class="" >{!! $partner_videos_title->content !!}</h1>
        </div>
    </div>
    <div class="row up">
    @foreach ($videos as $video)
        @if($video->status == 1)
        <div class="col-sm-6">
            <div class="video-learn center partner_title">
                <p>{!! $video->title !!}</p>
                <video class="partner-videos" id="" controls poster="">
                <source src="{{asset($video->path)}}" type="video/mp4">
                     Your browser does not support the video tag.
                </video> 
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection