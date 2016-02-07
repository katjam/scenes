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
  @todo Day out of days and sort by type.
  <ul>
  @foreach ($characters as $character)
    <li>{{ $character->cast_type }} {{ $character->character_name }}<a href="characters/{{ $character->id }}">view</a> <a href="characters/{{ $character->id }}/edit">edit</a></li>
  @endforeach
  </ul>
  <a href="characters/create">new Character</a>
@endsection
