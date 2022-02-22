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
    <div>
      <h3>PAYMENT SPLIT</h3>
    
      <div id="header">
        <h5>COMPANIES:</h5>
        <button onclick='handleChangeCompanyFormVisibility()'>ADD</button>
      </div>
      
        <div id='companyForm'>
          @yield('company_form')
        </div>
      
    </div>
  </main>
  <script>
    
    function handleChangeCompanyFormVisibility(){
      var companyForm = document.getElementById('companyForm')
      
      if (companyForm.style.display === 'none'){
        companyForm.style.display = 'block';
      } else {
        companyForm.style.display = 'none';
      }
    }
  </script>
</body>
</html>
