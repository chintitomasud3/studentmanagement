@extends('layouts.app')

@section('content')

<div class="container">
    <!-- <a href="{{url('/adddata')}}" class="btn btn-primary my-3">Add Student</a> -->
    <a href="{{route('teacher.create')}}" class="btn btn-primary my-3">Add Teacher</a>
    @if(Session::has('msg'))
    <p class="alert alert-success"> {{Session::get('msg')}}</p>
    @endif
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Department</th>
                
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($showData as $key=>$data)
            <tr>
                <td> {{$data->id}} </td>
                <td> {{$data->name}}</td>
                <td> {{$data->department}}</td>
                
                <td>
                    <a class="btn btn-success" href="{{url('/teacheredit/'.$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('/teacherdestroy/'.$data->id)}}" onclick="return confirm('are you sure')">Delete</a>

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{$showData->links()}}
</div>


@endsection