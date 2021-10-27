@extends('layouts.app')
@section('title')
    {{ $player->first_name .' '. $player->last_name }}
@endsection

@section('content')
<h1>{{ $player->first_name .' '. $player->last_name }}</h1>
<h2>Info: </h2>
<p class="mb-0">Email: <strong>{{ $player->email }}</strong></p>
<p>Team: <strong><a href="{{ route('show-team', ['team'=>$player->team->id]) }}">{{ $player->team->name }}</a></strong></p>
@endsection