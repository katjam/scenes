@extends('html')
@section('content')
  <ul>
  @foreach ($scenes as $scene)
    <li>{{ $scene->scn_no }} {{ $scene->int_ext }} {{ $scene->setting->set_name }} - {{ $scene->day_night }} {{ $scene->page_eights() }}
    <a href ="scenes/{{ $scene->id }}">view</a> <a href="scenes/ {{ $scene->id }}/edit">edit</a>
      <ul><div>@foreach ($scene->characters as $cast)<li> {{ $cast->character_name }}</li> @endforeach </div></ul>
    </li>
  @endforeach
  </ul>
<a href="scenes/create">new Scene</a>
@endsection
