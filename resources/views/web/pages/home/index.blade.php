@extends('web.layouts.layout1')
@section('content')
    <div class="overflow-hidden">
        @include('web.pages.home.hero')
        @include('web.pages.home.request')
        @include('web.pages.home.about')
        @include('web.pages.home.statistics')
        @include('web.pages.home.services')
        @include('web.pages.home.testimonials')
        @include('web.pages.home.blog')
        @include('web.pages.home.gallery')
        @include('web.pages.home.faqs')
        @include('web.pages.home.map')
    </div>
@endsection
