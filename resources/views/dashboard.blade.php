<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <style>
#developers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
    
}
#developers12 {
    margin:auto;
    width: 100%;
}
#mesg {
    margin:auto;
    width: 70%;
    padding: 10px;
}

#developers td, #developers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#developers tr:nth-child(even){background-color: #f2f2f2;}

#developers tr:hover {background-color: #ddd;}

#developers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #00a8a8;
  color: white;
}
.pull-right{
    margin:auto;
    text-align: center;
    width: 70%;
}
.pull-right2 {
    margin-left: 40px;
}

</style>
</head>
<body>
<div >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="pull-right"> Developers Records Table</h2>
            </div>
            <div class="pull-right2">
                <a class="btn btn-success" href="{{ route('developers.create') }}"> Create New Developer</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <br></br>
    <div id="mesg">
    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p>{{ $message }}</p>
            </div>
            </div>
    @endif

    <br>
   <div id="developers12">
    <table id="developers">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th >Action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
                <form action="{{ url('destroy', $item->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('developers.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('developers.edit',$item->id) }}">Edit</a>
                    @csrf
                    {{ method_field('GET') }}
                
                    <button type="submit" onclick="return confirm('Are you sure you want to delete the developer?')" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    </div>
    </div>
</x-app-layout>
