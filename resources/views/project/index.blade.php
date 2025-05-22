@extends('layouts.project')

@section('title', "Tutti i Progetti")
    
@section("content")


<div class="container">      
       
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

        @foreach ($projects as $project)
        <div class="col">
            <x-card>

                <x-slot:name>{{$project ["name"]}}</x-slot>          
                                
                <x-slot:period>{{$project ["period"]}}</x-slot>

                <x-slot:customer>{{$project ["customer"]}}</x-slot>  
                
                <x-slot:id>{{$project["id"]}}</x-slot>
            
                </x-card>
        </div>      
        @endforeach     
        
    </div>

</div>
@endsection