@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Hello world <a href="{{ route('edit', $match -> id) }}">
        &#9998;
      </a></h1>
      <ul>
        @if (!$match->result)

          <li>
            <strong>{{ $match -> team1 }}</strong>
            -
            {{ $match -> team2 }}
          </li>
        @else
          <li>
            {{ $match -> team1 }}
            -
            <strong>{{ $match -> team2 }}</strong>
          </li>
        @endif
        <li>
          {{ $match -> point1 }}
          -
          {{ $match -> point2 }}
        </li>
        <li>
          {{ $match -> result }}
        </li>
     </ul>
    </div>
@endsection
