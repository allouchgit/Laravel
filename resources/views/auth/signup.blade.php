@extends('layouts.app')

@section('title', 'Signup')


@section('content')
    <livewire:signup-card />
    @if (session('err'))
    <div class="alert alert-danger w-50 m-auto">
        <h5> {{ session('err') }}</h5>
    </div>
@endif
@endsection