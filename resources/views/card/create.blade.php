@extends('layouts.app')

@section('title', 'Create card')

@section('content')

<form action="/card" method="POST">
   @csrf
    <div class="formWrap">
      <label>Column title</label>
      <input type="text" name="title" value=''/>
           <!-- Error -->
        @if ($errors->has('title'))
          <div class="error">
              {{ $errors->first('title') }}
          </div>
        @endif

      <label>Column description</label>
      <input type="text" name="description" value=''/>
           <!-- Error -->
        @if ($errors->has('description'))
          <div class="error">
              {{ $errors->first('description') }}
          </div>
        @endif

        <label>Select card</label>
        <select name="column_id" class="select-css">
            @foreach($cards as $card)
                <option value="{{ $card->id }}">
                    {{ $card->title }}
                </option>    
            @endforeach 
        </select>
      <input type="submit" id="submit" class="submit" value="Submit" />
    </div>
</form>

   
@endsection