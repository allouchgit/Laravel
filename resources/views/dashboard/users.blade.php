@extends('layouts.app')

@section('title', 'Dashoard-Users')


@section('content')
    <livewire:dashboard.tabs />
    <livewire:dashboard.users-table :users="$users" />

@endsection