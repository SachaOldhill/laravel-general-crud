@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Hello world</h1>
      <ul>
        @foreach ($matches as $match)
          <li>
           <a href="{{ route('show', $match -> id) }}">
             {{ $match -> team1 }}
             -
             {{ $match -> team2 }}
           </a>
           <a href="{{ route('edit', $match -> id) }}">
             &#9998;
           </a>
           <a href="{{ route('destroy', $match -> id) }}">
             &#10060;
           </a>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
