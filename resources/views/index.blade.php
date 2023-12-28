@extends('includes.master')
@section('content')

@include('banner')

    <main id="main">

    @include('whoweare')

    @include('about')

    @include('service')

    @include('testimonials')

        @include('partner')
@include('contact')
    </main><!-- End #main -->
@endsection
