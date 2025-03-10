@extends('components.layout')

@section('content')
        <!-- Header End -->

        <!-- Hero  -->
        @include('components.hero')
        <!-- Hero End -->

        <!-- Project Showcase -->
        @include('components.project')
        <!-- Project Showcase -->

        <!-- About  -->
        @include('components.we')
        <!-- About End -->

        <!-- Service  -->
       @include('components.service')
        <!-- Service End -->

        <!-- Project  -->
        @include('components.project-details')
        <!-- Project End -->

        <!-- Pricing  -->
       @include('components.price')
        <!-- Pricing End -->

        <!-- Counter UP -->
        @include('components.counter')
        <!-- Counter UP End -->

        <!-- Testimonial  -->
        @include('components.testimonial')
        <!-- Testimonial End -->

        <!-- Process  -->
        @include('components.process')
        <!-- Process End -->

        <!-- News  -->
       @include('components.news')
        <!-- News End -->

        <!-- CTA  -->
       @include('components.cta')
        <!-- CTA End -->

        @endsection


