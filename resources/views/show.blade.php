<x-layout>
  <x-header>DETTAGLI</x-header>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$lesson['lezione']}}</h5>
          <p class="card-text">{{$lesson['descrizione']}}</p>
          <h3>{{$lesson['prezzo']}}euro</h3>
        </div>
      </div>
</x-layout>
