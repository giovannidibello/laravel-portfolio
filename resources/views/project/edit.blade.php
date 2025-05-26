@extends('layouts.project')

@section('title', "Modifica il progetto")

@section('content')

<form action="{{route("project.update", $project)}}" method="POST">
@csrf

{{-- aggiungo il metodo --}}
@method("PUT")

<div class="form-control mb-3 d-flex flex-column">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $project->name }}">   
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="period">Periodo</label>
    <input type="text" name="period" id="period" value="{{ $project->period }}">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="customer">Cliente</label>
    <input type="text" name="customer" id="customer" value="{{ $project->customer }}">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="summary">Descrizione</label>
    <textarea name="summary" id="summary" cols="30" rows="10">{{ $project->summary }}</textarea>   
    </div>

    <input type="submit" value="Salva">
</form>
    
@endsection