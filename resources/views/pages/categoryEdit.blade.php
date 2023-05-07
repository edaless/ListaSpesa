@extends('layouts.main-layout')

@section('content')
    
    <h1>New category</h1>
    <form method="POST" action="{{ route('category.update', $category) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $category -> name }}>
        
    </form>

@endsection