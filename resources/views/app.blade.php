<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset(asset('css/app.css'))}}">
  <title>Payment Split</title>
</head>
<body>
  <main>
    <div id="container">
      <h3>PAYMENT SPLIT</h3>
    
      <div id="header">
        <h5>COMPANIES:</h5>
        <button onclick='handleChangeCompanyFormVisibility()' id="handleCompanyForm">ADD</button>
      </div>
      
      <div id='companyForm' style="display: none">
        @yield('company_form')
      </div>
      
    </div>
  </main>
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
</body>
</html>
