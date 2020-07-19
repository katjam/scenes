@extends('html')
<div class="content">
	@if (Session::has('message'))
		<div class="flash alert-info">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif
	@yield('content')
</div>

@section('content')
  <h1>Characters</h1>
  <a href="characters/create">new Character</a>
  @foreach ($char_sort as $type => $characters)
    <h3>{{$type}}</h3>
    <ul>
    @foreach ($characters as $character)
    <li>(<b>{{\Scenes\Scene::page_count($character->scenes)}}</b>) {{ $character->character_name }}
      <a href="characters/{{ $character->id }}">view</a> <a href="characters/{{ $character->id }}/edit">edit</a>
    </li>
    @endforeach
    </ul>
  @endforeach
  <a href="characters/create">new Character</a>
@endsection
