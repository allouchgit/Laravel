@extends('layouts.app')

@section('title', 'Login')


@section('content')
    <livewire:login-card  :phone="$phone"/>
@endsection