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
    <div>
      <div class="radio">
        <input name="int_ext" type="radio" id="int" value="INT" {{$scene->int_ext == 'INT' ? 'checked' : ''}}>
        <label for="int">Int</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="int_ext" type="radio" id="ext" value="EXT" {{$scene->int_ext == 'EXT' ? 'checked' : ''}}>
        <label for="ext">Ext</label>
        <span class="check"></span>
      </div>
    </div>
    <!--  day night -->
    <div>
      <div class="radio">
        <input name="day_night" type="radio" id="day" value="day" {{$scene->day_night == 'day' ? 'checked' : ''}}>
        <label for="day">Day</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="night" value="night" {{$scene->day_night == 'night' ? 'checked' : ''}}>
        <label for="night">Night</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="evening" value="evening" {{$scene->day_night == 'evening' ? 'checked' : ''}}>
        <label for="evening">Evening</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="dawn" value="dawn" {{$scene->day_night == 'dawn' ? 'checked' : ''}}>
        <label for="dawn">Dawn</label>
        <span class="check"></span>
      </div>
      <div class="radio">
        <input name="day_night" type="radio" id="dusk" value="dusk" {{$scene->day_night == 'dusk' ? 'checked' : ''}}>
        <label for="dusk">Dusk</label>
        <span class="check"></span>
      </div>
    </div>
    <!-- page count -->
    {!! Form::label('page_count', 'Page Count Eights') !!}
    {!! Form::number('page_count') !!} /8

    <label>Characters</label>

    @foreach ($all_characters as $character)
    <div>{!! Form::checkbox('character_id[]', $character->id, in_array($character->id, $scn_chars)) !!} {!! $character->character_name !!}</div>
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
