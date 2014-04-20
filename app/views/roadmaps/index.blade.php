@extends('layouts.default')

@section('content')

<h1>Bienvenue sur la page des roadmaps :)</h1>

@foreach($roadmaps as $key => $roadmap)
    <ul>
        <li>ID : {{ $roadmap->id }} </li>
        <li>Description : {{ $roadmap->description }} </li>
        <li>Projet : {{ $roadmap->project()->first()->name }} </li>
    </ul>
@endforeach

@stop