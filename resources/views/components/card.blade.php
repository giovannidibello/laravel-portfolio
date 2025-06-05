<div class="card mb-5" style="width: 18rem;">  
  <img src="{{ asset ("storage/" . $image)}}" class="card-img-top" alt="cover">  
  <div class="card-body">
    <h5 class="card-title">{{$name}}</h5>
    <h5 class="card-title">{{$period}}</h5> 
    <h5 class="card-title">{{$type}}</h5>  
    <h5 class="card-subtitle text-muted">{{$customer}}</h5>  
    <a href="{{route("project.show", $id)}}" class="btn btn-primary mt-3">Visualizza</a>
  </div>
</div>

