@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

    <!-- subcription -->
    <div class="subscriptionMain text-center">
        <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Subscription Fee for Players</h1>
        <div class="grid mt-50">
            <div class="gbox wow zoomIn hovblue" id="hovBlue" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <div class="month">Monthly</div>
                <div class="price">$ 100</div>
                <div class="permonth">Per month</div>
            </div>
            <div class="gbox wow zoomIn" data-wow-delay="0.5s" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-duration="1.5s">
                <div class="month">Annual</div>
                <div class="price">$ 900</div>
                <div class="permonth">Per month</div>
            </div>
            <div class="gbox wow zoomIn" data-wow-delay="0.5s" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-duration="1.5s">
                <div class="month">Life Time</div>
                <div class="price">$ 2500</div>
                <div class="permonth">Per month</div>
            </div>
            <div class="gbox wow zoomIn" data-wow-delay="0.5s" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-duration="1.5s">
                <div class="tryUs">
                    Try us out<br> for <br> 1 month
                </div>
            </div>
        </div>
    </div>
@endsection