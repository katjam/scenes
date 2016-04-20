@extends('html')
@section('content')
<h1>{{ env('SITE_NAME', 'Please add SITE_NAME to .env') }} - Scenes by {{ Input::get('sort') }}
</h1>
<div class="no-print">List by <a href="scenes?sort=location">Location</a> <a href="scenes?sort=story">Story Order</a> <a href="scenes?sort=shoot%20day">Shooting Day</a></div>

<a href="scenes/create" class="no-print">new Scene</a>
	<div class="strips">
		@foreach ($scenes as $key => $scns)
        <div class="no-break">
        <h2>{{ $key }}</h2>
        <h3>Page count: {{ Scenes\Scene::page_count($scns) }}</h3>
        <ul>
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
        </ul>
        </div>
        @endforeach
  </div>
<a href="scenes/create" class="no-print">new Scene</a>
@endsection
