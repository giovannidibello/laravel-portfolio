@extends('layouts.project')

@section('title', $project->name)

@section('content')

<div class="d-flex py-4 gap-3">
 <a  class="btn btn-outline-warning" href="{{route("project.edit", $project)}}">Modifica</a>
 <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Elimina
</button>
</div>

<div class="container">

@if ($project->image)
   <img src="{{ asset ("storage/" . $project->image)}}" alt="cover" class="img-fluid" style="max-width: 400px; height: auto;">   
@endif

<h1>{{$project->period}}</h1>

<h2>{{$project->customer}}</h2>

<h2>{{$project->type->name}}</h2>

@if (count($project->technologies) > 0)
    <h5>
      @foreach ($project->technologies as $tech)
      <span class="badge" style="background-color: {{$tech->color}}">{{$tech->name}}</span>          
      @endforeach
    </h5>
@endif

<p>{{$project->summary}}</p>
    
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("project.destroy", $project)}}" method="POST">
             @csrf
            {{-- aggiungo il metodo --}}
            @method("DELETE")
            <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection