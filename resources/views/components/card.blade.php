<div class="card" style="width: 18rem;">
    <img src="./img/lezione.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$lezione}}</h5>
      <p class="card-text">
        {{Str::limit($descrizione,40)}}
      </p>
      <a href="{{route('show' , ['id'=>$id] ) }} " class="btn btn-primary">scopri i dettagli!</a>
    </div>
  </div>