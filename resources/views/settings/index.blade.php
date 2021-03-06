@extends('html')
<div class="content">
	@if (Session::has('message'))
		<div class="flash alert-info">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif
	@yield('content')
</div>

@section('content')
  <h1>Settings</h1>
  <a href="settings/create">new Setting</a>
  <ul>
  @foreach ($settings as $setting)
    <li>{{ $setting->location}} - {{ $setting->set_name }}<span class="no-print"><a href="settings/{{ $setting->id }}">view</a> <a href="settings/{{ $setting->id }}/edit">edit</a></span></li>
  @endforeach
  </ul>
  <a href="settings/create">new Setting</a>
@endsection
