@extends('html')
@section('content')
    <p>{{ $setting->set_name }}</p>
    <p>{{ $setting->location }}</p>
    <p>{{ $setting->notes}}</p>
    <p>
    @foreach ($setting->scenes as $scn)
      {{ $scn->scn_no }}
    @endforeach
</p>
@endsection
