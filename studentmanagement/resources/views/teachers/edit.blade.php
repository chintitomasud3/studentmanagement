<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

<div class="container">
    <a href="{{url('/teacher')}}" class="btn btn-primary my-3">Show All Teacher</a>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->


    <form action="{{url('/teacherupdate/'.$teacheredit->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Teacher Name</label>
            <input type="text" class="form-control" placeholder="Enter your Teacher Name" name="name" value="{{$teacheredit->name}}">
        </div>
        @error("name")
        <span class="text-danger"> {{$message}} </span>
        @enderror

        <div class="form-group">
            <label for="">Department</label>
            <input type="text" class="form-control" placeholder="Enter Teachers department" name="department" value="{{$teacheredit->department}}">
        </div>
        @error("department")
        <span class="text-danger"> {{$message}} </span>
        @enderror
        
        

        <input type="submit" class="btn btn-primary my-3" value="Submit">
    </form>
</div>


</html>