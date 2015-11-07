@extends('html')
@section('content')
    <p>{{ $scene->scn_no }}</p>
    <p>{{ $scene->int_ext }}</p>
    <p>{{ $scene->setting->set_name }}</p>
    <p>
    @foreach ($scene->characters as $character)
      {{ $character->character_name }}
    @endforeach
</p>
@endsection
