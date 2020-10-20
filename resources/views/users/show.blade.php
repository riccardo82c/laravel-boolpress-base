@extends('layouts.app')

@section('title',"Dettagli Utente - $user->name")

@section('main')

<h2>Dettagli Utente</h2>

<h3>Nome: {{$user->name}}</h3>
<p>Telefono: {{$user->info->phone}}</p>
<img src="{{$user->info->avatar}}" alt="{{$user->name}} avatar" srcset="">


<form action="{{route('users.destroy',$user->id)}}" method="post">
	@csrf
	@method('DELETE')
	<button type="submit">Cancella utente</button>
</form>


<h2>I Post di: {{$user->name}}</h2>

@foreach ($user->posts as $post)
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>
@endforeach


@endsection