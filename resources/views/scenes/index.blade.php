@extends('html')
@section('content')
<h1>Scenes</h1>
  <ul class="strips">
  @foreach ($scenes as $scene)
    <li><span class=" boxed scn-no">{{ $scene->scn_no }}</span>
      <span class="set-desc boxed">
        <span class="setting">{{ $scene->int_ext }}. {{ $scene->setting->set_name }} - {{ $scene->day_night }}</span>
        <span class="description">{{ $scene->description }}</span>
      </span>
      <span class="eights boxed">
        {{ $scene->page_eights() }}
      </span>
      <span class="characters">@foreach ($scene->characters as $cast) {{ $cast->character_name }}, @endforeach </span>

    <span class="no-print"><a href ="scenes/{{ $scene->id }}">view</a> <a href="scenes/ {{ $scene->id }}/edit">edit</a></span>
    </li>
  @endforeach
  </ul>
<a href="scenes/create">new Scene</a>
@endsection
