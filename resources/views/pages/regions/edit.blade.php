@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Edit Region</h1>
        <form action="{{route('regions.update', ['region' => $region->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                </div>
                <input name="name" value="{{$region->name}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code</span>
                </div>
                <input name="code" required value="{{$region->code}}" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-info btn-lg">Update Region</button>
            </div>
        </form>
        <form action="{{route('regions.destroy', ['region' => $region->id])}}" method="POST">
            @csrf
             @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
  </div>
</div>
@endsection