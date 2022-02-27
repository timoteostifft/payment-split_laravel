<div id="listContainer">
  <br>
  @foreach ($companiesList as $company)
    <div id='listData'>
      <p>Name: {{ $company->name }}</p>
      <p>CPNJ: {{ $company->cnpj }}</p>
      <p>Amount: {{ $company->amount }}</p>

      <div id="buttons">
        <button>LIST</button>
        <button>
          <a href="{{route('delete_company', $company->id)}}">REMOVE</a>
        </button>
      </div>
    </div>
  @endforeach  
</div>