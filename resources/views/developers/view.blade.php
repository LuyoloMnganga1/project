<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show Developer</title>
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
  input{
    border: 1px solid white;

  }
  input:hover{
    border: 1px solid white;

  }
  .cl {
    color: #9D1108;
  }
  
</style>
<div class="card uper">
  <div class="card-header">
    View Developer
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
      <form  action="{{ route('dashboard') }}">
          <div class="form-group">
              @csrf
              <label for="country_name"> Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $data->name }}" disabled/>
          </div> <br>
          <div class="form-group">
              <label for="cases">Email:</label>
              <input type="email" class="form-control" name="email" value="{{ $data->email }}" disabled/>
          </div> <br>
          <div class="form-group">
              <label for="cases">Phone:</label>
              <input type="text" class="form-control"  pattern="[0-9]{10}" value="{{ $data->phone }}" name="phone" disabled/>
          </div>
          <br></br>
          <button type="submit" class="btn btn-dark">Back</button>
      </form>
  </div>
  </div>
</body>
</html>