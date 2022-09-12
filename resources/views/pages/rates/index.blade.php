@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('rates.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
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
                @foreach ($rates as $rate)
                <tr>
                    <th scope="row">{{$rate->id}}</th>
                    <td>{{$rate->name}}</td>
                    <td>{{$rate->code}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('rates.edit', ['rate' => $rate->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('rates.destroy', ['rate' => $rate->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$rates->previousPageUrl()}}">Back</a></li>
	@if($rates->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/rates?page=1">1</a></li>
	
	@endif
	@if($rates->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$rates->currentPage()-2}}">{{$rates->currentPage()-2}}</a></li>
	@endif
	@if($rates->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$rates->currentPage()-1}}">{{$rates->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$rates->currentPage()}}">{{$rates->currentPage()}}</a></li>

	@if($rates->lastPage() - $rates->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$rates->currentPage()+1}}">{{$rates->currentPage()+1}}</a></li>
    @endif
	@if($rates->lastPage() - $rates->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$rates->currentPage()+2}}">{{$rates->currentPage()+2}}</a></li>
	@endif

	@if($rates->lastPage() - $rates->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$rates->lastPage()}}">{{$rates->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$rates->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>
    </div>
  </div>
</div>

@endsection