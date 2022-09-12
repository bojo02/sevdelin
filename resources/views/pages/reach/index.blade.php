@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('reaches.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
      @if ($status->content == '0')
      <br><br>
      <a href="{{route('reaches.on', ['id' => '1'])}}" style="color:white;" type="button" class="btn btn-success btn-lg">Turn On</a>
      @else
      <br><br>
      <a href="{{route('reaches.off', ['id' => '0'])}}" style="color:white;" type="button" class="btn btn-danger btn-lg">Turn Off</a>
      @endif
      </div>
    <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reaches as $reach)
                <tr>
                    <th scope="row">{{$reach->id}}</th>
                    <td>{{$reach->text}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('reaches.edit', ['reach' => $reach->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('reaches.destroy', ['reach' => $reach->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$reaches->previousPageUrl()}}">Back</a></li>
	@if($reaches->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/reaches?page=1">1</a></li>
	
	@endif
	@if($reaches->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$reaches->currentPage()-2}}">{{$reaches->currentPage()-2}}</a></li>
	@endif
	@if($reaches->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$reaches->currentPage()-1}}">{{$reaches->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$reaches->currentPage()}}">{{$reaches->currentPage()}}</a></li>

	@if($reaches->lastPage() - $reaches->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$reaches->currentPage()+1}}">{{$reaches->currentPage()+1}}</a></li>
    @endif
	@if($reaches->lastPage() - $reaches->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$reaches->currentPage()+2}}">{{$reaches->currentPage()+2}}</a></li>
	@endif

	@if($reaches->lastPage() - $reaches->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$reaches->lastPage()}}">{{$reaches->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$reaches->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>
    </div>
  </div>
</div>

@endsection