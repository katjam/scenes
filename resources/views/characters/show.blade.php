@extends('html')
@section('content')
    <p>Total Pages: {{ $page_count }}</p>
    <h1>{{ $character->character_name }}</h1>
    <p>{{ $character->cast_type }}</p>
    <p>{{ $character->description }}</p>
    <p>{{ $character->actor }}</p>
    <p>{{ $character->contact }}</p>
    <div class="strips">
      <div class="strip-wrapper">
        @foreach ($scns as $scn)
          <div>Filming day {{$scn->filming_day}}</div>
          <div class="scn-no">{{ $scn->scn_no }}</div>
          <div class="set-desc">
            <div class="setting">{{ $scn->int_ext }}. {{ $scn->setting->loc_set_name }} - {{ $scn->day_night }}</div>
            <div class="description">{{ $scn->description }}</div>
          </div>
          <div class="eights">
              {{ $scn->page_eights() }}
          </div>
        @endforeach
      </div>
    </div>
@endsection
