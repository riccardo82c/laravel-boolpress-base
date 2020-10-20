@extends('layouts.app')

@section('title','Posts')

@section('main')


@if (session('status'))
	<div>
		<h2>Complimenti {{session('status')}}, Post Inserito Correttamente!!!
		</h2>
	</div>
@endif

<h2>Tutti i Post</h2>	

@foreach ($posts as $post)

<div>
	<h3>{{$post->title}}</h3>
	<p>{{$post->body}}</p>
	<p><strong>{{$post->user->name}}</strong> * <em>{{$post->created_at}}</em></p>
	<hr>
</div>
	
			
@endforeach
	 
@endsection