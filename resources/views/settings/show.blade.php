@extends('html')
@section('content')
    <p>Total Page: {{ $page_count }}</p>
    <p>{{ $setting->set_name }}</p>
    <p>{{ $setting->location }}</p>
    <p>{{ $setting->notes}}</p>
    @foreach ($setting->scenes as $scn)
      <div>
      <div>{{ $scn->scn_no }} - {{ $scn->int_ext }} - {{ $scn->day_night }}</div>
      <div>{{ $scn->description }}</div>
        <ul>
        @foreach ($scn->characters as $character)
          <li>{{ $character->character_name }}</li>
        @endforeach
        </ul>
      </div>
    @endforeach
@endsection
