@extends('layouts.landingpage')
@section('content')
    @include('template.navbarUser')
    @include('event.hero')
    @include('event.event')
    {{-- @include('course.langganan') --}}
    @include('landingPage.contact')
    @include('template.footerUser')
@endsection
