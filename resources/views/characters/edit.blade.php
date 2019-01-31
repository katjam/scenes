@extends('html')
@section('content')

{!! Form::model($character, array('route' => array('characters.update', $character->id), 'value' => 'PUT')) !!}

    <input type="hidden" name="_method" value="PUT">
    <!--character name -->
    {!! Form::label('character_name', 'character Name') !!}
    {!! Form::text('character_name') !!}

    <!-- cast type -->
    <div class="radio">
      <input name="cast_type" type="radio" id="main" value="main" {{ $character->cast_type == 'main' ? 'checked' : '' }} >
      <label for="main">main</label>
    </div>
    <div class="radio">
      <input name="cast_type" type="radio" id="supporting" value="supporting" {{ $character->cast_type == 'supporting' ? 'checked' : '' }} >
      <label for="supporting">supporting</label>
    </div>
    <div class="radio">
      <input name="cast_type" type="radio" id="extras" value="extras" {{ $character->cast_type == 'extras' ? 'checked' : '' }} >
      <label for="extras">extras</label>
    </div>
    <div class="radio">
      <input name="cast_type" type="radio" id="vehicle" value="vehicle" {{ $character->cast_type == 'vehicle' ? 'checked' : '' }} >
      <label for="vehicle">vehicle</label>
    </div>
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
