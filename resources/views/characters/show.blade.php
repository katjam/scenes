@extends('html')
@section('content')
    <p>Total Page: {{ $page_count }}</p>
    <p>{{ $character->character_name }}</p>
    <p>{{ $character->description }}</p>
    <p>{{ $character->actor }}</p>
    <p>{{ $character->contact }}</p>
    @foreach ($character->scenes as $scn)
      <div>
      <div>{{ $scn->scn_no }} - {{ $scn->int_ext }} - {{ $scn->day_night }}</div>
      <div>{{ $scn->description }}</div>
      </div>
    @endforeach
@endsection
