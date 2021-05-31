@extends('layouts.main-layout')
@section('content')
 <div class="home_container">
   <div class="mb-4">
     <h1>New Match</h1>
   </div>
   <form method="POST" action="{{ route('update', $match -> id) }}">

     @csrf
     @method('POST')

     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="team1"><h4>Team 1</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="team1" name="team1" placeholder="Team 1" value="{{ $match -> team1 }}">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="team2"><h4>Team 2</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="team2" name="team2" placeholder="Team 2" value="{{ $match -> team2 }}">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="point1"><h4>Point 1</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="point1" name="point1" placeholder="Point 1" value="{{ $match -> point1 }}">
         </div>
     </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="point2"><h4>Point 2</h4></label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="point2" name="point2"placeholder="Point 2" value="{{ $match -> point2 }}">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="result"><h4>Result</h4></label>
          <div class="col-lg-6">
            <select class="form-control" id="result" name="result" value="{{ $match -> result }}">
              <option value="0"
              @if ($match -> result==0)
                selected
              @endif
              >Team 1</option>
              <option value="1"
              @if ($match -> result==1)
                selected
              @endif
              >Team 2</option>
            </select>
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Edit the match</button>
   </form>
 </div>
@endsection
