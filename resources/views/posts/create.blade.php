@extends('layouts.app')

@section('title','Insert Posts')

@section('main')

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<h2>Scrivi un Post</h2>

<form action="{{route('posts.store')}}" method="post">
	@csrf

	<select name="user_id">
			@foreach ($users as $user)
				<option value="{{$user->id}}">{{$user->name}}</option>
			@endforeach
	</select>

	<label for="title">Title</label>
	<input type="text" name="title" placeholder="Inserisci titolo" autocomplete="off">
	<textarea name="body" cols="30" rows="10" placeholder="Testo post" autocomplete="off"></textarea>
	
	

	<button type="submit">Inserisci Post</button>






</form>
	
	 
@endsection

