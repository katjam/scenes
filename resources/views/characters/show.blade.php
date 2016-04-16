@extends('html')
@section('content')
    <p>Total Page: {{ $page_count }}</p>
    <h1>{{ $character->character_name }}</h1>
    <p>{{ $character->cast_type }}</p>
    <p>{{ $character->description }}</p>
    <p>{{ $character->actor }}</p>
    <p>{{ $character->contact }}</p>
    <ul class="strips">
        @foreach ($character->scenes as $scn)
        <li>
            <span class="scn-no">{{ $scn->scn_no }}</span>
            <span class="set-desc">
                <span class="setting">{{ $scn->int_ext }}. {{ $scn->setting->set_name }} - {{ $scn->day_night }}</span>
                <span class="description">{{ $scn->description }}</span>
            </span>
            <span class="eights">
                {{ $scn->page_eights() }}
            </span>
        </li>
        @endforeach
    </ul>
@endsection
