@extends('layout')

@section('content')
    <h1>Here are those cards</h1>
    @foreach($cards as $card)
      <div><?php echo $card->title; ?></div>
    @endforeach
@stop
