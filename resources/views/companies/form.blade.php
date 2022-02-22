@extends('app')

@section('company_form')

<form action="{{route('add_company')}}" method="POST">

  {{csrf_field()}}

  <div>
    <label for="name">Name: </label>
    <input type="text" id="name" name="name">
  </div>

  <div>
    <label for="name">CNPJ: </label>
    <input type="text" id="cnpj" name="cnpj">
  </div>
  
  <div id="amount">
    <label for="percent">Money amount: </label>
    <input type="number" id="amount" name="amount">
  </div>

  <button type="submit">
    ADD
  </button>

</form>


@endsection
  