<x-layout>
    <x-header>SERVIZI</x-header>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            @foreach ($servizi as $lezione )
            <div class="col-12 col-md-3 m-5">
                <x-card
                id="{{$lezione['id']}}"
                lezione="{{$lezione['lezione']}}"
                descrizione="{{$lezione['descrizione']}}"
                prezzo="{{$lezione['prezzo']}}"
                />
            </div>  
            @endforeach
            
        </div>
    </div>
</x-layout>