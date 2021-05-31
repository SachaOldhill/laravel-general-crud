@extends('layouts.main-layout')
@section('content')
 <div class="home_container">
   <div class="mb-4">
     <h1>New Match</h1>
   </div>
   <form method="POST" action="{{ route('store') }}">

     @csrf
     @method('POST')

     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="team1"><h4>Team 1</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="team1" name="team1" placeholder="Team 1">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="team2"><h4>Team 2</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="team2" name="team2" placeholder="Team 2">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="point1"><h4>Point 1</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="point1" name="point1" placeholder="Point 1">
         </div>
     </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="point2"><h4>Point 2</h4></label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="point2" name="point2"placeholder="Point 2">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="result"><h4>Result</h4></label>
          <div class="col-lg-6">
            <select class="form-control" id="result" name="result">
              <option value="0">Team 1</option>
              <option value="1">Team 2</option>
            </select>
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
   </form>
 </div>
@endsection
