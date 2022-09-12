@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('regions.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
      </div>
    <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regions as $region)
                <tr>
                    <th scope="row">{{$region->id}}</th>
                    <td>{{$region->name}}</td>
                    <td>{{$region->code}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('regions.edit', ['region' => $region->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('regions.destroy', ['region' => $region->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$regions->previousPageUrl()}}">Back</a></li>
	@if($regions->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/regions?page=1">1</a></li>
	
	@endif
	@if($regions->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$regions->currentPage()-2}}">{{$regions->currentPage()-2}}</a></li>
	@endif
	@if($regions->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$regions->currentPage()-1}}">{{$regions->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$regions->currentPage()}}">{{$regions->currentPage()}}</a></li>

	@if($regions->lastPage() - $regions->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$regions->currentPage()+1}}">{{$regions->currentPage()+1}}</a></li>
    @endif
	@if($regions->lastPage() - $regions->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$regions->currentPage()+2}}">{{$regions->currentPage()+2}}</a></li>
	@endif

	@if($regions->lastPage() - $regions->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$regions->lastPage()}}">{{$regions->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$regions->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>

    </div>
  </div>
</div>

@endsection