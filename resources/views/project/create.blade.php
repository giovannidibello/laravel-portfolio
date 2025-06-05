@extends('layouts.project')

@section('title', "Aggiungi un progetto")

@section('content')

<form action="{{route("project.store")}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="form-control mb-3 d-flex flex-column">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">   
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="type_id">Tipo</label>
    <select name="type_id" id="type_id">
    @foreach ($types as $type)
        <option value="{{$type->id}}">{{$type->name}}</option>
    @endforeach
    </select>
</div>

{{-- technologies --}}
<div class="form-control mb-3 d-flex flex-wrap">
    @foreach ($technologies as $technology)
    <div class="me-2">
    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="tag-{{$technology->id}}">
    <label for="tag-{{$technology->id}}">{{$technology->name}}</label>
    </div>   
    @endforeach
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="period">Periodo</label>
    <input type="text" name="period" id="period">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="customer">Cliente</label>
    <input type="text" name="customer" id="customer">    
</div>
<div class="form-control mb-3 d-flex flex-wrap gap-3">
    <label for="image">Immagine</label>
    <input type="file" name="image" id="image">    
</div>
<div class="form-control mb-3 d-flex flex-column">
    <label for="summary">Descrizione</label>
    <textarea name="summary" id="summary" cols="30" rows="10"></textarea>   
    </div>

    <input type="submit" value="Salva">
</form>
    
@endsection