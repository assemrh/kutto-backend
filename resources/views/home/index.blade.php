@extends('layouts.app')
@section('content')
<h1 hidden>Welcome to the Home Page</h1>

    @include('parts.find')
    @include('parts.counter')
    @include('parts.adoption')
    @include('parts.faq')
    @include('parts.adoption-shop')


@endsection
