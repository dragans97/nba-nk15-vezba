@extends('layouts.app')
@section('title', "Teams")
    
@section('content')
    <h1>Teams</h1>
    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolores totam pariatur, ut ullam quaerat!</p>
    
    @forelse ($teams as $team)
        <a href="{{ route('show-team', ['team' => $team->id]) }}" class="d-block mb-3">{{ $team->name }}</a>
    @empty
        <p>Sorry, currently there's no teams in your list.</p>
    @endforelse
@endsection