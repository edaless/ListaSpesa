@extends('layouts.main-layout')

@section('content')
    
    <h1>New category</h1>
    <form method="POST" action="{{ route('category.store') }}">
        @csrf
        

        <label for="name">Name</label>
        <input type="text" name="name">
        <br>

        
        <input type="submit" value="CREATE NEW category">
    </form>

@endsection