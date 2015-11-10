@extends('html')
@section('content')

{!! Form::model($character, array('route' => array('characters.update', $character->id), 'value' => 'PUT')) !!}

    <input type="hidden" name="_method" value="PUT">
    <!--character name -->
    {!! Form::label('character_name', 'character Name') !!}
    {!! Form::text('character_name') !!}

    <!-- description -->
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}

    <!-- actor -->
    {!! Form::label('actor', 'Actor') !!}
    {!! Form::text('actor') !!}

    <!-- conatct -->
    {!! Form::label('contact', 'Contact') !!}
    {!! Form::text('contact') !!}

    {!! Form::submit('Update character') !!}

{!! Form::close() !!}
@endsection
