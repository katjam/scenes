@extends('html')
@section('content')
<h2>{{ env('SITE_NAME', 'Please add SITE_NAME to .env') }} - By Location</h2>
<a href="scenes/create" class="no-print">new Scene</a>
  <ul class="strips">
@foreach ($scenes as $key => $scns)
<h3>{{ $key }}</h3>
@foreach ($scns as $scene)
    <li>
      <span class="no-print"><a href ="scenes/{{ $scene->id }}">view</a> <a href="scenes/ {{ $scene->id }}/edit">edit</a></span>

      <span class="scn-no">{{ $scene->scn_no }}</span>
      <span class="set-desc">
        <span class="setting">{{ $scene->int_ext }}. {{ $scene->setting->set_name }} - {{ $scene->day_night }}</span>
        <span class="description">{{ $scene->description }}</span>
      </span>
      <span class="eights">
        {{ $scene->page_eights() }}
      </span>
      <span class="characters">@foreach ($scene->characters as $cast) {{ $cast->character_name }}, @endforeach </span>

    </li>
	@endforeach
	@endforeach
  </ul>
<a href="scenes/create" class="no-print">new Scene</a>
@endsection
