@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1>Checking purpose</h1>
                </div>
            </div>
        </div>
    </div>
</div> -->

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


@endsection