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
    <a href="{{url('/course')}}" class="btn btn-primary my-3">Show All Course</a>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->


    <form action="{{url('/coursestore')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input type="text" class="form-control" placeholder="Enter your Course Name" name="name">
        </div>
        @error("name")
        <span class="text-danger"> {{$message}} </span>
        @enderror

        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" placeholder="Enter Course Description" name="description">
        </div>
        @error("description")
        <span class="text-danger"> {{$message}} </span>
        @enderror
        

        <input type="submit" class="btn btn-primary my-3" value="Submit">
    </form>
</div>

@endsection