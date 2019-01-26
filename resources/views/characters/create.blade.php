@extends('html')
@section('content')

{!! Form::model(new Scenes\Character, array('route' => array('characters.store'))) !!}

    <!--set name -->
    {!! Form::label('character_name', 'Character Name') !!}
    {!! Form::text('character_name', null, array('autofocus')) !!}

    <!-- cast type -->
    <div>
      <input name="cast_type" type="radio" id="main" value="main">
      <label for="main">main</label>
    </div>
    <div>
      <input name="cast_type" type="radio" id="supporting" value="supporting">
      <label for="supporting">supporting</label>
    </div>

    <!-- description -->
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}

    <!-- actor -->
    {!! Form::label('actor', 'Actor') !!}
    {!! Form::text('actor') !!}

    <!-- contact -->
    {!! Form::label('contact', 'Contact') !!}
    {!! Form::text('contact') !!}

    {!! Form::submit('Update Character') !!}

{!! Form::close() !!}
@endsection
