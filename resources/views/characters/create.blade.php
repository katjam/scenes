@extends('html')
@section('content')

{!! Form::model(new Scenes\Character, array('route' => array('characters.store'))) !!}

    <!--set name -->
    {!! Form::label('character_name', 'Character Name') !!}
    {!! Form::text('character_name') !!}

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
