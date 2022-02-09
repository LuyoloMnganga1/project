<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <style>
  .uper {
        margin: 10%  20% ;
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px;
  }
  input{
    border: 1px solid white;

  }
  input:hover{
    border: 1px solid white;

  }
  
</style>
<div class="card uper">
  <div class="card-header">
   <h1>  CRUD System <h1>
  </div>
  <div class="card-body">
      <p>Welcome to CRUD System :<p><br>
  @if (Route::has('login'))
               
               @auth
                   <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-info">Dashboard</button></a>
               @else
                   <a href="{{ route('login') }}"><button type="button" class="btn btn-success">Log in</button></a>

                   @if (Route::has('register'))
                       <a href="{{ route('register') }}" ><button type="button" class="btn btn-primary">Register</button></a>
                   @endif
               @endauth
       @endif
  </div>
  </div>
</body>
</html>
