@extends('layouts.app')

@section('content')
    <h1>Activities</h1>
    @foreach ($activities as $activity)
        <p>{{ $activity->type }} - {{ $activity->datetime }}</p>
    @endforeach
@endsection