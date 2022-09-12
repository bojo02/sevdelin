@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Edit Location</h1>
        <form action="{{route('rates.update', ['rate' => $rate->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="inputGroup-sizing-default">Name</span>
                </div>
                <input name="name" value="{{$rate->name}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code</span>
                </div>
                <input name="code"  value="{{$rate->code}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <h4>Select Video</h4>
            <div class="input-group mb-3">

               
                <select name="video_id" class="custom-select custom-select-lg mb-3">
                    @foreach ($videos as $video)
                        @if($video->id != $rate->video->id)
                            <option value="{{$video->id}}">{{$video->title}}</option>
                        @else
                            <option selected value="{{$video->id}}">{{$video->title}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
          
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-info btn-lg">Update Rate</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection