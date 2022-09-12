@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Create Option</h1>
        <form action="{{route('reaches.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Text</span>
                </div>
                <input name="text" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-success btn-lg">Create Option</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection