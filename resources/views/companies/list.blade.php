<div id="listContainer">
  <br>
  @foreach ($companiesList as $company)
    <div id='listData'>
      <p>Name: {{ $company->Name }}</p>
      <p>CPNJ: {{ $company->CNPJ }}</p>
      <p>Amount: {{ $company->Amount }}</p>

      <div id="buttons">
        <button>LIST</button>
        <button>
          <a href="{{route('delete_company', $company->ID)}}">REMOVE</a>
        </button>
      </div>
    </div>
  @endforeach  
</div>