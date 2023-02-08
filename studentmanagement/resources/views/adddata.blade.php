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
    <a href="{{url('/student')}}" class="btn btn-primary my-3">Show Data</a>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
@if(Session::has('msg'))
 <p class="alert alert-success"> {{Session::get('msg')}}</p>
@endif
    <form action="{{url('/store-data')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">FirstName</label>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="FirstName">
        </div>
        @error("FirstName")
         <span class="text-danger"> {{$message}} </span>
        @enderror

        <div class="form-group">
            <label for="">LastName</label>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="LastName">
        </div>
        @error("LastName")
         <span class="text-danger"> {{$message}} </span>
        @enderror
        <div class="form-group">
            <label for="">Gender</label>
            <input type="text" class="form-control" name="Gender" placeholder="Enter your Gender">
        </div>
        @error("Gender")
         <span class="text-danger"> {{$message}} </span>
        @enderror
        <!-- <div class="form-group">
            <label for="">Religion</label>
            <input type="text" class="form-control" name="Religion" placeholder="Enter your Religion">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="Email" placeholder="Enter your Email">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="PhoneNumber" placeholder="Enter your PhoneNumber">
        </div>
        <div class="form-group">
            <label for="">Batch</label>
            <input type="text" class="form-control" name="Batch" placeholder="Enter your Batch">
        </div>  -->

        <input type="submit" class="btn btn-primary my-3" value="Submit">
    </form>
</div>


</html>