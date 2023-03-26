@extends('layouts.app')

@section('title', 'Product')


@section('content')

{{$product->name}}

<h4>{{$product->name}}</h4>
<h4>{{$product->price}}</h4>
<h4>{{$product->description}}</h4>
@endsection