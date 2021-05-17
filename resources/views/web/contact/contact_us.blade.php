@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="contactMain">
        <div class="col-lg-12 text-center">
            <h1 class="wow bounceInDown" data-wow-delay="0.3s" data-wow-duration="1.5s">contact us</h1>
        </div>
        
            <form>
                <div class="col-lg-12 mt-20">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <input type="text" class="mt-50" placeholder="Name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <input type="email" class="mt-50" placeholder="Email Address">
                    </div>
                    <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <input type="tel" class="mt-50" placeholder="Contact No.">
                    </div>
                    <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="mt-50"></textarea>
                    </div>
                    <div class="col-lg-12 text-center mt-80 wow jackInTheBox" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <button type="submit">Send</button>
                    </div>
                </div>
            </form>
        
    </div>
@endsection