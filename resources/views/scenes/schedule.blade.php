@extends('html')
@section('content')
<h1>Schedule filming days</h1>

<div>
    <form method="POST" action="{{route('scenes.schedule')}}" >
        {!! csrf_field() !!}

        Scene <input name="add_scene" type="text" />
        Shoot Day <input name="to_day" type="text" />
        <button type="submit">Add</button>
    <form>
    </div>
   @endsection
