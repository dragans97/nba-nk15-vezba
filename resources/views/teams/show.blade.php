@extends('layouts.app')
@section('title')
    {{ $team->name }}
@endsection

@section('content')
    <h1>{{ $team->name }}</h1>
    <div class="my-4">
        <h2>Team info</h2>
        <p class="mb-0">Contact email: <strong>{{ $team->name }}</strong></p>
        <p class="mb-0">Address: <strong>{{ $team->address }}</strong></p>
        <p class="mb-0">City: <strong>{{ $team->city }}</strong></p>
    </div>

    <h2>Players</h2>
    @forelse ($team->players as $player)
        <a href="{{ route('show-player', ['player' => $player->id]) }}" class="d-block">{{ $player->first_name . ' ' . $player->last_name }}</a>
    @empty
        <p>This team currently has no players.</p>
    @endforelse
@endsection