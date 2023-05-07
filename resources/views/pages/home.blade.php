@extends('layouts.main-layout')

@section('content')
    
<h1>categories</h1>

<a href="{{ route('category.create') }}">CREATE NEW category</a>
<br>
{{-- <a href="{{ route('product.create') }}">CREATE NEW product</a> --}}
    <ul>
        
        @foreach ($categories as $category)
        <li class="categoria">
            <div class="my-options">
                <a href="{{ route('category.delete', $category) }}">X</a>
                <br>
                <a href="{{ route('category.edit', $category) }}">
                    EDIT
                </a>
            </div>
            <span class="nome">
                {{ $category->name }}
            </span>
            
    
            <ul >
                @foreach ($category->products as $product)
                    <li class="prodotto">{{ $product->name }} 
                        <a href="{{ route('product.delete', $product) }}">X</a></li>
                @endforeach
                <a href="{{ route('product.create', $category->id) }}">CREATE NEW product</a>
            </ul>
        </li>
        @endforeach
    </ul>

@endsection