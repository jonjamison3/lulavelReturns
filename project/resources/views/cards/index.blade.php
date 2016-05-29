@extends('layout')

@section('content')
    <h1>Here are those cards</h1>
    @foreach($cards as $card)
      <div>
        <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
      </div>
    @endforeach
@stop
