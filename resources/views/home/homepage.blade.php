@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
@endsection

@section('content')

    @include('home.section1')
    @include('home.section2')
    @include('home.section3')
    @include('home.section4')
    @include('home.section5')
    @include('home.section6')
    @include('home.section7')

@endsection