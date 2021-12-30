@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	@if(count($posts) > 0)
    	@foreach($posts as $post)
    	<div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h6>{{$post->title}}</h6>
                    <p>{{$post->message}}</p>
                    <small>Posted By: {{$post->user->name}}</small><br><br>
                    <a href="posts/{{$post->id}}">Read More</a>
                </div>
                <div class="card-footer">
                	<div class="row">
                		@if(!Auth::guest())
                			@if(Auth::user()->id == $post->user_id)
                				<div class="col-md-6">
		                			<a class="btn btn-sm btn-success" href="posts/{{$post->id}}/edit">Edit</a>
		                		</div>
		                		<div class="col-md-6">
		                			{!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
				                        {{Form::hidden('_method','DELETE')}}
				                        {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
				                    {!! Form::close() !!}
		                		</div>
                			@endif
                		@endif	
                	</div>	
                </div>
            </div>
        </div>
    	@endforeach
    	@else
    	<div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   No Posts Found
                </div>
            </div>
        </div>
    	@endif
    </div>
</div>
@endsection