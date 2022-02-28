<form method="POST">

  {{csrf_field()}}

  <div>
    <label for="name">Name: </label>
    <input type="text" id="name" name="name">
  </div>

  <div>
    <label for="name">CNPJ: </label>
    <input type="text" id="cnpj" name="cnpj">
  </div>

  <div>
    <label for="percent">Split Percent: </label>
    <input type="number" id="percent" name="percent">
  </div>

  <button>ADD</button>
</form>

{{-- action="{{route('addParticipant')}}"  --}}
