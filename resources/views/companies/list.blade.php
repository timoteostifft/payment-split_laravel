<div id="listContainer">
  <br>
  @foreach ($companiesList as $company)
    <div id='listData'>
      <p>Name: {{ $company->Name }}</p>
      <p>CPNJ: {{ $company->CNPJ }}</p>
      <p>Amount: {{ $company->Amount }}</p>

      <div id="buttons">
        <button>LIST</button>
        <button>REMOVE</button>
      </div>
    </div>
  @endforeach  
</div>