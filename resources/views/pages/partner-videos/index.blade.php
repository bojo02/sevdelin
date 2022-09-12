@extends('layouts.admin')

@section('body')

<div class="container center up">
  <div class="row">
      <div class="col-sm-2 bottom">
      <a href="{{route('partner-video.create')}}" style="color:white;" type="button" class="btn btn-secondary btn-lg">Create</a>
      </div>
    <div class="col-sm-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Path</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr>
                    <th scope="row">{{$video->id}}</th>
                    <td>{{$video->title}}</td>
                    <td>{{$video->path}}</td>
                    <td>
                        @if($video->status == 1)
                            Active
                            @else
                            Inactive
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{route('partner-video.edit', ['partner_video' => $video->id])}}" style="color:white;" type="button" class="btn btn-secondary">Edit</a>
                          
                            <form action="{{route('partner-video.destroy', ['partner_video' => $video->id])}}" method="POST">
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
    <li class="page-item"><a class="page-link" href="{{$videos->previousPageUrl()}}">Back</a></li>
	@if($videos->currentPage() - 1 >= 3)
	<li class="page-item"><a class="page-link" href="/videos?page=1">1</a></li>
	
	@endif
	@if($videos->currentPage()-1 >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$videos->currentPage()-2}}">{{$videos->currentPage()-2}}</a></li>
	@endif
	@if($videos->currentPage()-1 >= 1)
	<li class="page-item"><a class="page-link" href="/video?page={{$videos->currentPage()-1}}">{{$videos->currentPage()-1}}</a></li>
	@endif

    <li class="page-item active"><a class="page-link" href="/video?page={{$videos->currentPage()}}">{{$videos->currentPage()}}</a></li>

	@if($videos->lastPage() - $videos->currentPage() >= 1)
    <li class="page-item"><a class="page-link" href="/video?page={{$videos->currentPage()+1}}">{{$videos->currentPage()+1}}</a></li>
    @endif
	@if($videos->lastPage() - $videos->currentPage() >= 2)
	<li class="page-item"><a class="page-link" href="/video?page={{$videos->currentPage()+2}}">{{$videos->currentPage()+2}}</a></li>
	@endif

	@if($videos->lastPage() - $videos->currentPage() >= 3)
	
	<li class="page-item"><a class="page-link" href="/video?page={{$videos->lastPage()}}">{{$videos->lastPage()}}</a></li>
	@endif
	
    <li class="page-item"><a class="page-link" href="{{$videos->nextPageUrl()}}">Next</a></li>
	
  </ul>
</nav>
    </div>
  </div>
</div>

@endsection