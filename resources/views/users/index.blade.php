@extends('layouts.app')

@section('title','Utenti')

@section('main')


	@if (session('status'))
	   <div>
		   ID utente: {{session('status')}} cancellato
	   </div>
	@endif

	<h2>Lista Utenti</h2>	

	@foreach ($users as $user)

		<ul>
			<li>Nome: {{$user->name}}</li>
			<li>Email: {{$user->email}}</li>
			<li>Password: {{$user->password}}</li>
			<li><a href="{{route('users.show',$user->id)}}">Dettagli Utente</a> </li>
		</ul>
		 
	@endforeach
 
@endsection