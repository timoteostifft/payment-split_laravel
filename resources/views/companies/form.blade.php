<div id="header">
  <h5>COMPANIES:</h5>
  <button onclick='handleChangeCompanyFormVisibility()' id="handleCompanyForm">ADD</button>
</div>

<div id="companyForm" style="display: none">
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
</div>

<script>

  function handleChangeCompanyFormVisibility(){
    var companyForm = document.getElementById('companyForm')
    
    if (companyForm.style.display === 'none'){
      companyForm.style.display = 'block';
      document.getElementById('handleCompanyForm').innerHTML = 'CLOSE'
    } else {
      companyForm.style.display = 'none';
      document.getElementById('handleCompanyForm').innerHTML = 'ADD'
    }
  }
</script>
