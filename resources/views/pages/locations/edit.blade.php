@extends('layouts.admin')

@section('body')
<div class="container up">
  <div class="row center">
    <div class="col center">
        <h1>Edit Location</h1>
        <form action="{{route('locations.update', ['location' => $location->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="inputGroup-sizing-default">Name</span>
                </div>
                <input name="name" value="{{$location->name}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code</span>
                </div>
                <input name="code"  value="{{$location->code}}" required type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <h4>Select Rate</h4>
            <div class="input-group mb-3">

               
                <select name="rate_id" class="custom-select custom-select-lg mb-3">
                    @foreach ($rates as $rate)
                        @if($rate->id != $location->rate->id)
                            <option value="{{$rate->id}}">{{$rate->name}}</option>
                        @else
                            <option selected value="{{$rate->id}}">{{$rate->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <h4>Select Region</h4>
            <div class="input-group mb-3">

               
                <select name="region_id" class="custom-select custom-select-lg mb-3">
                    @foreach ($regions as $region)
                        @if ($region->id != $location->region->id)
                            <option value="{{$region->id}}">{{$region->name}}</option>
                        @else
                            <option selected value="{{$region->id}}">{{$region->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
          
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-info btn-lg">Update Location</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection