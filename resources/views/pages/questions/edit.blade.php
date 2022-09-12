@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Edit Question</h1>
        <form action="{{route('questions.update', ['question' => $question->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                </div>
                <input name="title" value="{{$question->title}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Content</span>
                </div>
                <input name="content" required value="{{$question->content}}" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-info btn-lg">Update Question</button>
            </div>
        </form>
        <form action="{{route('questions.destroy', ['question' => $question->id])}}" method="POST">
            @csrf
             @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
  </div>
</div>
@endsection