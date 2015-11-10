@extends('html')
@section('content')

{!! Form::model(new Scenes\Scene, array('route' => array('scenes.store'))) !!}

    <!-- scn number -->
    {!! Form::label('scn_no', 'Scene Number') !!}
    {!! Form::text('scn_no') !!}

    <!-- description -->
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}

    <!-- int ext -->
    {!! Form::label('int_ext', 'Int') !!}
    {!! Form::radio('int/ext', 'INT', false) !!}
    {!! Form::label('int_ext', 'ext') !!}
    {!! Form::radio('int/ext', 'EXT', false) !!}

    @todo change to radio int ext
    @todo add setting dropdown
    @todo add day night radio
    @todo add char dropdown connected to pivot
    @todo page count /8
    @todo story day

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
