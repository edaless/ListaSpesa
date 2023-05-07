@extends('layouts.main-layout')

@section('content')
    
<h1>categories</h1>

<a href="{{ route('category.create') }}">CREATE NEW category</a>
<br>
<a href="{{ route('product.create') }}">CREATE NEW product</a>
    <ul>
        <div>cateogorie:</div>
        @foreach ($categories as $category)
        <li class="categoria">
            <span class="nome">
                {{ $category->name }}
            </span>
        {{ $category->pic_path }}
    
            <ul >
                prodotti:
                @foreach ($category->products as $product)
                    <li class="prodotto">{{ $product->name }}</li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>

@endsection