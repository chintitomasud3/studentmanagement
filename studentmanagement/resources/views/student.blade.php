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
    <div class="container">
        <!-- <a href="{{url('/adddata')}}" class="btn btn-primary my-3">Add Student</a> -->
        <a href="{{route('student.adddata')}}" class="btn btn-primary my-3">Add Student</a>
        @if(Session::has('msg'))
        <p class="alert alert-success"> {{Session::get('msg')}}</p>
        @endif
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showData as $key=>$data)
                <tr>
                    <td> {{$data->id}} </td>
                    <td> {{$data->FirstName}}</td>
                    <td> {{$data->LastName}}</td>
                    <td> {{$data->Gender}}</td>
                    <td> {{$data->email}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('/edit-data/'.$data->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('/delete-data/'.$data->id)}}" onclick="return confirm('are you sure')">Delete</a>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{$showData->links()}}
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>




</html>