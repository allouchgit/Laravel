@extends('layouts.app')

@section('title', 'Home')


@section('content')

<div class="row">
    <div class="col-3">
        <nav class="nav flex-column">
            <a class="nav-link text-dark"  href="/products">جميع التصنيفات</a>
            @foreach ($categories as $category)
            <a class="nav-link text-dark" href="/categories/show/{{$category->id}}">{{$category->name}}</a>
            
            @endforeach
        </nav>
    </div>
    <div class="col-9">
        <div style="min-height: 100px">
            <div class="row">
                @foreach ($products as $product)
                <livewire:product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection