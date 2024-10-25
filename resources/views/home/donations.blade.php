@extends('layouts.app')
@section('content')
<x-breadcrumb title="{{ __('Donations and Sponsorships') }}" />

@include('parts.donation.donate')

@endsection
