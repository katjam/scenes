@extends('html')
@section('content')
<h1>Edit Scene</h1>
{!! Form::model($scene, array('route' => array('scenes.update', $scene->id), 'value' => 'PUT')) !!}

    <input type="hidden" name="_method" value="PUT">

    <!-- scn number -->
    {!! Form::label('scn_no', 'Scene Number') !!}
    {!! Form::text('scn_no') !!}
    <label>Setting</label>
    {!! Form::select('setting_id', $settings) !!}

    <!-- int ext -->
    <div class="radio">
      {!! Form::label('int_ext', 'Int') !!}
      {!! Form::radio('int_ext', 'INT', false) !!}
    </div>
    <div class="radio">
      {!! Form::label('int_ext', 'Ext') !!}
      {!! Form::radio('int_ext', 'EXT', false) !!}
    </div>
     <!--  day night -->
    <div class="radio">
      {!! Form::label('day_night', 'Day') !!}
      {!! Form::radio('day_night', 'day', false) !!}
    </div>
    <div class="radio">
      {!! Form::label('day_night', 'Night') !!}
      {!! Form::radio('day_night', 'night', false) !!}
    </div>
    <div class="radio">
      {!! Form::label('day_night', 'Dawn') !!}
      {!! Form::radio('day_night', 'dawn', false) !!}
    </div>
    <div class="radio">
      {!! Form::label('day_night', 'Dusk') !!}
      {!! Form::radio('day_night', 'dusk', false) !!}
    </div>

    <!-- page count -->
    {!! Form::label('page_count', 'Page Count Eights') !!}
    {!! Form::number('page_count', '') !!} /8

    <label>Characters</label>
    @foreach ($characters as $character)
    <div>{!! Form::checkbox('character_id[]', $character->id) !!} {!! $character->character_name !!}</div>
    @endforeach

    <!-- description -->
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}

    <!-- filming day -->
    {!! Form::label('filming_day', 'Filming Day') !!}
    {!! Form::number('filming_day') !!}

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
