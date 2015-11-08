@extends('html')
@section('content')

{!! Form::model($setting, array('route' => array('settings.update', $setting->id), 'value' => 'PUT')) !!}

    <input type="hidden" name="_method" value="PUT">
    <!--set name -->
    {!! Form::label('set_name', 'Set Name') !!}
    {!! Form::text('set_name') !!}

    <!-- location -->
    {!! Form::label('location', 'Location') !!}
    {!! Form::text('location') !!}

    <!-- notes -->
    {!! Form::label('notes', 'Notes') !!}
    {!! Form::text('notes') !!}

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
