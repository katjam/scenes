@extends('html')
@section('content')
<h1>Edit Scene</h1>
{!! Form::model($scene, array('route' => array('scenes.update', $scene->id), 'value' => 'PUT')) !!}

    <input type="hidden" name="_method" value="PUT">

    <!-- scn number -->
    {!! Form::label('scn_no', 'Scene Number') !!}
    {!! Form::text('scn_no') !!}

    <!-- description -->
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}

    <!-- int ext -->
    <h3>INT/EXT</h3>
    <div>
      {!! Form::label('int_ext', 'Int') !!}
      {!! Form::radio('int_ext', 'INT', false) !!}
    </div>
    <div>
      {!! Form::label('int_ext', 'Ext') !!}
      {!! Form::radio('int_ext', 'EXT', false) !!}
    </div>
    <h3>Setting</h3>
    {!! Form::select('setting_id', $settings) !!}

     <!--  day night -->
    <h3>Day/Night</h3>
    <div>
      {!! Form::label('day_night', 'Day') !!}
      {!! Form::radio('day_night', 'day', false) !!}
    </div>
    <div>
      {!! Form::label('day_night', 'Night') !!}
      {!! Form::radio('day_night', 'night', false) !!}
    </div>
    <div>
      {!! Form::label('day_night', 'Dawn') !!}
      {!! Form::radio('day_night', 'dawn', false) !!}
    </div>
    <div>
      {!! Form::label('day_night', 'Dusk') !!}
      {!! Form::radio('day_night', 'dusk', false) !!}
    </div>
    <h3>Characters</h3>
    @foreach ($characters as $character)
    <div>{!! Form::checkbox('character_id[]', $character->id) !!} {!! $character->character_name !!}</div>
    @endforeach

   <!-- page count -->
    {!! Form::label('page_count', 'Page Count Eights') !!}
    {!! Form::number('page_count') !!} /8
   <!-- story day -->
    {!! Form::label('story_day', 'Story Day') !!}
    {!! Form::number('story_day') !!}

    {!! Form::submit('Update Setting') !!}

{!! Form::close() !!}
@endsection
