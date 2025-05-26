@extends('layouts.project')

@section('title', "Aggiungi un progetto")

@section('content')

<form action="{{route("project.store")}}" method="POST">
@csrf

<div class="form-control mb-3 d-flex flex-column">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">   
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="period">Periodo</label>
    <input type="text" name="period" id="period">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="customer">Cliente</label>
    <input type="text" name="customer" id="customer">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="summary">Descrizione</label>
    <textarea name="summary" id="summary" cols="30" rows="10"></textarea>   
    </div>

    <input type="submit" value="Salva">
</form>
    
@endsection