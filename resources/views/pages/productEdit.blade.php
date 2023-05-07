@extends('layouts.main-layout')

@section('content')
    
    <h1>New product</h1>
    <form method="POST" action="{{ route('product.update', $product) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $product -> name }}>
        
    </form>

@endsection