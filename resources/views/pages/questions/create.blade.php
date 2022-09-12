@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Create Question</h1>
        <form action="{{route('questions.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                </div>
                <input name="title" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Content</span>
                </div>
                <input name="content" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-success btn-lg">Create Question</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection