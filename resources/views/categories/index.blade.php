@extends('layouts.app')

@section('content')

<div class="container">


@foreach($categories as $category)
    <h3><a href="{{ route('categories.show' , $category->slug) }}"> {{ $category->name }} </a></h3>
    
@endforeach
</div>


@endsection