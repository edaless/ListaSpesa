@extends('layouts.main-layout')

@section('content')
    
    <h1>New product</h1>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @foreach ($categories as $category)
        <div>
            <input type="radio" id="{{$category->name}}" name="category" value="{{$category->id}}">
            <label for="{{$category->name}}">{{$category->name}}</label>
        </div>
        @endforeach

        <label for="name">Name</label>
        <input type="text" name="name">
        <br>

        
        <input type="submit" value="CREATE NEW Product">
    </form>

@endsection