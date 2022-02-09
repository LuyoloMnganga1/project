<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Developer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <style>
  .uper {
        margin: 10%  35% ;
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px;
  }
  .cl {
    color: #9D1108;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Developer
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" id ="cl" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('developers.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name"> Name:</label>
              <input type="text" class="form-control" name="name" required/>
          </div> <br>
          <div class="form-group">
              <label for="cases">Email:</label>
              <input type="email" class="form-control" name="email" required/>
          </div> <br>
          <div class="form-group">
              <label for="cases">Phone:</label>
              <input type="text" class="form-control"  pattern="[0-9]{10}" name="phone" required/>
          </div>
          <br></br>
          <button type="submit" class="btn btn-success">Add Developer</button>
      </form>
  </div>
  </div>
</body>
</html>