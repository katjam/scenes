@extends('html')
@section('content')

{!! Form::model(new Scenes\Character, array('route' => array('characters.store'))) !!}

    <!--set name -->
    {!! Form::label('character_name', 'Character Name') !!}
    {!! Form::text('character_name') !!}

    <!-- cast type -->
    <div>
      {!! Form::label('cast_type', 'main') !!}
      {!! Form::radio('cast_type', 'main', false) !!}
    </div>
    <div>
      {!! Form::label('cast_type', 'supporting') !!}
      {!! Form::radio('cast_type', 'supporting', false) !!}
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

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
