


@extends('layouts.app')

@section('title', 'Dashoard-Product')


@section('content')
    <livewire:dashboard.tabs />
    <div style="min-height: 100px">

        <div class="row">
            @foreach ($products as $product)
            <livewire:product-card :product="$product" />
            @endforeach
        </div>
    </div>
@endsection


