@extends('html')
@section('content')
<h1>View Scene</h1>
    <p>{{ $scene->scn_no }}</p>
    <p>{{ $scene->int_ext }}</p>
    <p>{{ $scene->setting->set_name }}</p>
    <p>{{ $scene->description }}</p>
    <ul>
    @foreach ($scene->characters as $character)
      <li>{{ $character->character_name }}</li>
      @endforeach
    </ul>
@endsection
