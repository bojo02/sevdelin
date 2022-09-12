@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Create Rate</h1>
        <form action="{{route('rates.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <input name="name" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code</span>
                </div>
                <input name="code" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <select name="video_id" class="custom-select custom-select-lg mb-3">
                    @foreach ($videos as $video)
                        <option value="{{$video->id}}">{{$video->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-success btn-lg">Create Rate</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection