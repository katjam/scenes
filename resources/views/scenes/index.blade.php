@extends('html')
@section('content')
<h1>Scenes by {{ request()->input('sort') }}
</h1>
<a href="scenes/create" class="no-print">new Scene</a>
<div class="no-print sort">
  List by
  <a href="scenes?sort=location">Location</a>
  <a href="scenes?sort=story">Story Order</a>
  <a href="scenes?sort=shoot%20day">Shooting Day</a>
</div>
	<div class="strips">
		@foreach ($scenes as $key => $scns)
        <div class="no-break">
        <h2>{{ $key }}</h2>
        <h3>Page count: {{ App\Scene::page_count($scns) }}</h3>
        <div class="strip-wrapper">
        @foreach ($scns as $scene)
          <div class="no-print">
            <a href ="scenes/{{ $scene->id }}">view</a> <a href="scenes/ {{ $scene->id }}/edit">edit</a>
          </div>
          <div class="scn-no">{{ $scene->scn_no }}</div>
          <div class="set-desc">
            <div class="setting">
              {{ $scene->int_ext }}. {{ $scene->setting->loc_set_name }} - {{ $scene->day_night }}
            </div>
            <div class="description">{{ $scene->description }}</div>
          </div>
          <div>
            <div class="eights">{{ $scene->page_eights() }}</div>
            <div class="characters">
            @foreach ($scene->characters as $cast) {{ $cast->character_name }}, @endforeach
            </div>
          </div>
        @endforeach
        </div>
        </div>
     @endforeach
     </div>
     <a href="scenes/create" class="no-print">new Scene</a>
   @endsection
