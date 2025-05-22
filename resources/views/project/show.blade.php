@extends('layouts.project')

@section('title', $project->name)

@section('content')

<div class="container">

<h1>{{$project->period}}</h1>

<h2>{{$project->customer}}</h2>

<p>{{$project->summary}}</p>
    
</div>
@endsection