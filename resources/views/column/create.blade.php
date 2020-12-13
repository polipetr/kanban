@extends('layouts.app')

@section('title', 'Create column')

@section('content')

<form action="/column" method="POST">
   @csrf
    <div class="formWrap">
      <label>Column title</label>
      <input type="text" name="title" value=''/>
           <!-- Error -->
        @if ($errors->has('name'))
          <div class="error">
              {{ $errors->first('title') }}
          </div>
        @endif
      <input type="submit" id="submit" class="submit" value="Submit" />
    </div>
</form>

   
@endsection