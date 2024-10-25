{{--
import AdoptionBreadcumb from '../components/adoptions/AdoptionBreadcumb';
import AdoptionSlider from '../components/adoptions/AdoptionSlider'
import AdoptionPuppies from '../components/adoptions/AdoptionPuppies'
import AdoptionFaq from '../components/adoptions/AdoptionFaq'
import AdoptionGallery from '../components/adoptions/AdoptionGallery'
--}}

@extends('layouts.app')
@section('content')
    <x-breadcrumb title="{!! __('About Us') !!}"
        bg="{{ asset('assets/img/images/cute-dog-playing-with-woman-shelterdf.webp') }}"
        />
    @include('parts.about.about-us')
    @include('parts.about.faq')
@endsection
