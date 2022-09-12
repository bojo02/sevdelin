@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('locations.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
      </div>
    <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Rate</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                <tr>
                    <th scope="row">{{$location->id}}</th>
                    <td>{{$location->name}}</td>
                    <td>{{$location->code}}</td>
                    <td>{{$location->rate->name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('locations.edit', ['location' => $location->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('locations.destroy', ['location' => $location->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="{{$locations->previousPageUrl()}}">Back</a></li>
	@if($locations->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/locations?page=1">1</a></li>
	
	@endif
	@if($locations->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$locations->currentPage()-2}}">{{$locations->currentPage()-2}}</a></li>
	@endif
	@if($locations->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$locations->currentPage()-1}}">{{$locations->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$locations->currentPage()}}">{{$locations->currentPage()}}</a></li>

	@if($locations->lastPage() - $locations->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$locations->currentPage()+1}}">{{$locations->currentPage()+1}}</a></li>
    @endif
	@if($locations->lastPage() - $locations->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$locations->currentPage()+2}}">{{$locations->currentPage()+2}}</a></li>
	@endif

	@if($locations->lastPage() - $locations->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$locations->lastPage()}}">{{$locations->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$locations->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>
    </div>
  </div>
</div>

@endsection