@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('promotions.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
      </div>
    <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $promotion)
                <tr>
                    <th scope="row">{{$promotion->id}}</th>
                    <td>{!! $promotion->text !!}</td>
                    <td>
                        @if($promotion->status == 1)
                            Active
                            @else
                            Inactive
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('promotions.edit', ['promotion' => $promotion->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('promotions.destroy', ['promotion' => $promotion->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$promotions->previousPageUrl()}}">Back</a></li>
	@if($promotions->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/promotions?page=1">1</a></li>
	
	@endif
	@if($promotions->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$promotions->currentPage()-2}}">{{$promotions->currentPage()-2}}</a></li>
	@endif
	@if($promotions->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$promotions->currentPage()-1}}">{{$promotions->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$promotions->currentPage()}}">{{$promotions->currentPage()}}</a></li>

	@if($promotions->lastPage() - $promotions->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$promotions->currentPage()+1}}">{{$promotions->currentPage()+1}}</a></li>
    @endif
	@if($promotions->lastPage() - $promotions->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$promotions->currentPage()+2}}">{{$promotions->currentPage()+2}}</a></li>
	@endif

	@if($promotions->lastPage() - $promotions->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$promotions->lastPage()}}">{{$promotions->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$promotions->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>
    </div>
  </div>
</div>

@endsection