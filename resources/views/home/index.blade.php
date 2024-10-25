@extends('layouts.app')
@section('content')
    @include('parts.slider')
    @include('parts.find')
    @include('parts.counter')
    @include('parts.adoption')
    @include('parts.faq')
    @include('parts.adoption-shop')

    <script src="https://static.elfsight.com/platform/platform.js" async></script>
    <style>
        .eapps-instagram-feed-container+a {
            display: none !important;
        }

        #eapps-instagram-feed-1>a {
            display: none !important;
        }
    </style>
    <div class="elfsight-app-6f82c870-1536-4489-9766-9dd5fe0817d8" data-elfsight-app-lazy></div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

        });
        var timeOut = setInterval(function() {
            if ($("#eapps-instagram-feed-1 > a").length) {
                $("#eapps-instagram-feed-1 > a").remove()
                clearInterval(timeOut);
            }
        }, 1000);
    </script>
@endpush
