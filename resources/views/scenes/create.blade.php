@extends('html')
@section('content')
<h1>Create new Scene</h1>
{!! Form::model(new Scenes\Scene, array('route' => array('scenes.store'))) !!}

    <!-- scn number -->
    {!! Form::label('scn_no', 'Scene Number') !!}
    {!! Form::text('scn_no', null, array('autofocus')) !!}
    <label>Setting</label>
    {!! Form::select('setting_id', $settings) !!}
    <!-- int ext -->
    <div>
      <div class="radio">
        <input name="int_ext" type="radio" id="int" value="INT">
        <label for="int">Int</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="int_ext" type="radio" id="ext" value="EXT">
        <label for="ext">Ext</label>
        <span class="check"></span>
      </div>
    </div>
    <!--  day night -->
    <div>
      <div class="radio">
        <input name="day_night" type="radio" id="day" value="day">
        <label for="day">Day</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="night" value="night">
        <label for="night">Night</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="evening" value="evening">
        <label for="evening">Evening</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="dawn" value="dawn">
        <label for="dawn">Dawn</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="dusk" value="dusk">
        <label for="dusk">Dusk</label>
        <span class="check"></span>
      </div>
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

    {!! Form::submit('Update Scene') !!}

{!! Form::close() !!}
@endsection
