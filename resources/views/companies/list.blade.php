<div id="listContainer">
  <br>
  @foreach ($companiesList as $company)
    <div>
      <p>Name: {{ $company->Name }}</p>
      <p>CPNJ: {{ $company->CNPJ }}</p>
      <p>Amount: {{ $company->Amount }}</p>
    </div>
  @endforeach  
</div>