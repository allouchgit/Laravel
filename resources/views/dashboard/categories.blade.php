@extends('layouts.app')

@section('title', 'Dashoard-Categories')


@section('content')
    <livewire:dashboard.tabs />
    <livewire:dashboard.add-category />
    <livewire:dashboard.categories-table :categories="$categories" />

@endsection