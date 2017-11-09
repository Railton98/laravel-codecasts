<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CodeCasts - Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Bem Vindo ao Laravel!</h1>
      @foreach ($customers as $customer)

        <p>{{ $customer->name }}</p>

      @endforeach
    </div>
  </body>
</html>
