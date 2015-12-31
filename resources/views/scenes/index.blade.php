@extends('html')
@section('content')
<h1>Scenes</h1>
  <ul class="strips">
  @foreach ($scenes as $scene)
    <li>{{ $scene->scn_no }} {{ $scene->int_ext }} {{ $scene->setting->set_name }} - {{ $scene->day_night }} {{ $scene->page_eights() }}
    <span class="no-print"><a href ="scenes/{{ $scene->id }}">view</a> <a href="scenes/ {{ $scene->id }}/edit">edit</a></span>
      <ul><div>@foreach ($scene->characters as $cast)<li> {{ $cast->character_name }}</li> @endforeach </div></ul>
    </li>
  @endforeach
  </ul>
<a href="scenes/create">new Scene</a>
@endsection
