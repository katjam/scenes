@extends('html')
@section('content')
    <p>{{ $setting->set_name }}</p>
    <p>{{ $setting->location }}</p>
    <p>{{ $setting->notes}}</p>
@endsection
