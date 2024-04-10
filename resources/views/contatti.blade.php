<x-layout>
  <form action="{{route('contatti.submit')}}" method="POST">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nome dell'utente</label>
        <input name="name" type="text" class="form-control" id="name">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Mail dell'utente</label>
          <input name="email" type="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
          <label for="messaggio" class="form-label">Messaggio dell'utente</label>
          <textarea name="messaggio" id="messaggio" cols="30" rows="7" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Contattaci</button>
  </form>

</x-layout>
