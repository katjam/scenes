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
  <ul>
  @foreach ($settings as $setting)
    <li>{{ $setting->set_name }}<a href="settings/{{ $setting->id }}">view</a> <a href="settings/{{ $setting->id }}/edit">edit</a></li>
  @endforeach
  </ul>
  <p><a href="settings/create">new Setting</a>
@endsection
