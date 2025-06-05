@extends('layouts.project')

@section('title', "Tutti i Progetti")
    
@section("content")

<div class="d-flex py-4 gap-3">
 <a  class="btn btn-outline-primary" href="{{route("project.create")}}">Aggiungi un progetto</a> 
</div>


<div class="container">      
       
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

        @foreach ($projects as $project)
        <div class="col">
            <x-card>

                <x-slot:image>{{$project ["image"]}}</x-slot>                         

                <x-slot:name>{{$project ["name"]}}</x-slot>    
                
                <x-slot:type>{{$project->type ["name"]}}</x-slot>
                                
                <x-slot:period>{{$project ["period"]}}</x-slot>

                <x-slot:customer>{{$project ["customer"]}}</x-slot>  
                
                <x-slot:id>{{$project["id"]}}</x-slot>
            
                </x-card>
        </div>      
        @endforeach     
        
    </div>

</div>
@endsection