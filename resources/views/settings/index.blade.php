@extends('html')
@section('content')
  <ul>
  @foreach ($settings as $setting)
    <li>{{ $setting->set_name }}</li>
  @endforeach
  </ul>
@endsection
