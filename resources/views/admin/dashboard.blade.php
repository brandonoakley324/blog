@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
        @if(Auth::user() && Auth::user()->role_id === 1 )
                        <h1>Admin Dashboard</h1>
                        @elseif(Auth::user() && Auth::user()->role_id === 2)
                      <h1>Author Dashboard</h1>
                        @elseif(Auth::user() && Auth::user()->role_id === 3)
                        <h1>Subscriber Dashboard</h1>
                        @endif
        </div>

          @if(Auth::user() && Auth::user()->role_id === 1 )
        <div class="col-md-12">
            <a class="btn btn-success btn-margin-right" href="{{ route('blogs.create') }}">Create Blog</a>
            <a class="btn btn-success btn-margin-right" href="{{ route('admin.blogs') }}">Publish Blog</a>
            <a class="btn btn-success btn-margin-right" href="{{ route('categories.create') }}">Create Category</a>
            <a class="btn btn-danger btn-margin-right" href="{{ route('blogs.trash') }}">Trashed Blogs</a>
            <a class="btn btn-info btn-margin-right" href="{{ route('users.index') }}">Manage Users</a>
        </div>
        @endif


            @if(Auth::user() && Auth::user()->role_id === 2 )
        <div class="col-md-12">
            <a class="btn btn-success btn-margin-right" href="{{ route('blogs.create') }}">Create Blog</a>
            <a class="btn btn-success btn-margin-right" href="{{ route('categories.create') }}">Create Category</a>
  
        </div>
        @endif

            @if(Auth::user() && Auth::user()->role_id === 3)
        <div class="col-md-12">
            <a class="btn btn-success btn-margin-right" href="#">What can I do?</a>
        </div>
        @endif


    <div>

@endsection