<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Payment Split</title>
</head>
<body>
  <main>
    <div id="container">
      <h3>PAYMENT SPLIT</h3>
      
      @include('companies.form')

      @include('companies.list')
            
    </div>
  </main>
</body>
</html>
