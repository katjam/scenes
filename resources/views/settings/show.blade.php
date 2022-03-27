@extends('html')
@section('content')
    <p>Total Page: {{ $page_count }}</p>
    <p>{{ $setting->set_name }}</p>
    <p>{{ $setting->location }}</p>
    <p>{{ $setting->notes}}</p>
    <div class="strips">
      <div class="strip-wrapper">
      @foreach ($setting->scenes as $scn)
        <div>Filming day {{ $scn->filming_day }}</div>
        <div class="scn-no">{{ $scn->scn_no }}</div>
        <div class="set-desc">
          <div class="setting">{{ $scn->int_ext }}. {{ $scn->day_night }}</div>
          <div class="description">{{ $scn->description }}</div>
        </div>
        <div>
          <div class="eights">{{ $scn->page_eights() }}</div>
          <div class="characters">
          @foreach ($scn->characters as $character)
            {{ $character->character_name }},
          @endforeach
          </div>
        </div>
      @endforeach
      </div>
    </div>
@endsection
