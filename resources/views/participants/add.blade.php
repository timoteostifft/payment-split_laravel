<form method="POST" action="{{route('addParticipant', $companyId)}}">

  {{csrf_field()}}

  <div>
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required>
  </div>

  <div>
    <label for="name">CNPJ: </label>
    <input type="text" id="cnpj" name="cnpj" required>
  </div>

  <div>
    <label for="percent">Split Percent: </label>
    <input type="number" id="percent" name="percent" required>
  </div>

  <button type="submit">ADD</button>
</form>


