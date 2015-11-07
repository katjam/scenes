@extends('html')
@section('content')
  <ul>
  @foreach ($scenes as $scene)
    <li>{{ $scene->scn_no }} {{ $scene->int_ext }} {{ $scene->setting->set_name }} - {{ $scene->day_night }}
      <div>@foreach ($scene->characters as $cast) {{ $cast->character_name }} - @endforeach </div>
    </li>
  @endforeach
  </ul>
@endsection
