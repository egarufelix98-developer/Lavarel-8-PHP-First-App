@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h3 class="text-center">{{$post->title}}</h3>
                    <p>{{$post->message}}</p>
                    <small>{{$post->created_at}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection