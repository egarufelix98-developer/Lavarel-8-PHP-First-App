@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Create a New Post</h1>
                </div>
                <div class="card-body">
                    {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method'=>'POST'])!!}
                        {{Form::label('title','Blog Title',['class'=>'mt-3'])}}
                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title','required'])}}
                        {{Form::label('message','Blog Description',['class'=>'mt-5'])}}
                        {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Title','required'])}}
                        {{Form::submit('SUBMIT',['class'=>'btn btn-primary mt-3 pull-right'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection