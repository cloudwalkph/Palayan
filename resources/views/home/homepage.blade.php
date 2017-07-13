@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
    <link href={{ asset("css/home/jquery.bxslider.css") }} rel="stylesheet" />
@endsection

@section('content')

    @include('home.section1')
    @include('home.section2')
    @include('home.section3')
    @include('home.section4')
    @include('home.section5')
    @include('home.section6')

@endsection

@section('scripts')
    <script>
        function initMap() {
            var uluru = {lat: 15.565305, lng: 121.096589};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: 'images/map-marker.png'
            });
        }
    </script>
    <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk3NEP3aTWe2beTuGUmKRy6_iIua3Sskg&callback=initMap">
    </script>

    <!-- bxSlider Javascript file -->
    <script src={{ asset("js/jquery.bxslider.js") }}></script>
    <script>
        $(document).ready(function(){
            $('.latest-updates').bxSlider({
                mode: 'horizontal',
                slideWidth: 250,
                maxSlides: 3,
                minSlides: 1,
                speed: 800,
                infiniteLoop: true,
                slideMargin: 15
            });
        });
    </script>
@endsection