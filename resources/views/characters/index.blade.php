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
  @todo Day out of days.
  <ul>
  @foreach ($characters as $character)
    <li>{{ $character->character_name }}<a href="characters/{{ $character->id }}">view</a> <a href="characters/{{ $character->id }}/edit">edit</a></li>
  @endforeach
  </ul>
  <p><a href="characters/create">new Character</a>
@endsection
