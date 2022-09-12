@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('questions.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
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
                @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{$question->id}}</th>
                    <td>{{$question->title}}</td>
                    <td>{{$question->content}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('questions.edit', ['question' => $question->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('questions.destroy', ['question' => $question->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$questions->previousPageUrl()}}">Back</a></li>
	@if($questions->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/questions?page=1">1</a></li>
	
	@endif
	@if($questions->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$questions->currentPage()-2}}">{{$questions->currentPage()-2}}</a></li>
	@endif
	@if($questions->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$questions->currentPage()-1}}">{{$questions->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$questions->currentPage()}}">{{$questions->currentPage()}}</a></li>

	@if($questions->lastPage() - $questions->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$questions->currentPage()+1}}">{{$questions->currentPage()+1}}</a></li>
    @endif
	@if($questions->lastPage() - $questions->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$questions->currentPage()+2}}">{{$questions->currentPage()+2}}</a></li>
	@endif

	@if($questions->lastPage() - $questions->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$questions->lastPage()}}">{{$questions->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$questions->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>

    </div>
  </div>
</div>

@endsection