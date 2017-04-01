@extends('html')
@section('content')

{!! Form::model(new Scenes\Setting, array('route' => array('settings.store'))) !!}

    <!--set name -->
    {!! Form::label('set_name', 'Set Name') !!}
    {!! Form::text('set_name', null, array('autofocus')) !!}

    <!-- location -->
    {!! Form::label('location', 'Location') !!}
    {!! Form::text('location') !!}

    <!-- notes -->
    {!! Form::label('notes', 'Notes') !!}
    {!! Form::text('notes') !!}

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
