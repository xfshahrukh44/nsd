@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">
            
    <div class="container text-center signupMain">
        <div class="signup">
            <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Sign up</h1>
        </div>
        <form method="POST" action="{{ route('register') }}">
            
            @csrf
            <div class="form">
                <div class="registerAccHere mt-40 wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    Register Your Account here.
                </div>
                <div class="inps">
                    <!-- type -->
                    <select id="" class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" name="type">
                        <option value="Kicker">Kicker</option>
                        <option value="Punter">Punter</option>
                        <option value="Long Snapper">Long Snapper</option>
                    </select>
                    <!-- name -->
                    <div class="NameInp mt-50 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="text" placeholder="First Name" name="name" required>
                    </div>
                    <!-- last_name -->
                    <div class="NameInp mt-50 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="text" placeholder="Last Name" name="last_name" required>
                    </div>
                    <!-- user_name -->
                    <div class="NameInp mt-50 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="text" placeholder="Username" name="user_name" required>
                    </div>
                    <!-- email -->
                    <div class="NameInp mt-50 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <!-- password -->
                    <div class="NameInp mt-50 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <!-- password_confirmation -->
                    <div class="NameInp mt-50 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                </div>
                <div class="subscription mt-40 wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    Subscriptions
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="grid mt-30">
                            @foreach($packages as $package)
                                <div class="gbox wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
                                    <div class="month">{{$package->title}}</div>
                                    <div class="price">$ {{intval($package->amount)}}</div>
                                    <div class="permonth">Per month</div>
                                </div>
                            @endforeach
                            <div class="gbox wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
                                <div class="tryUs">
                                    Try us out<br/> for <br/> 1 month
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <div class="paymentM mt-40">
                            Payment Method
                        </div>
                    </div>
                    <div class="paymentDiv">
                        <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="NameInp">
                                        <input type="text" placeholder="Credit Card Number">
                                    </div>
                                </div>
                                <div class="col-lg-5 mt-40">
                                    <div class="NameInp exCvv">
                                        <input type="text" placeholder="Expiration date">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-lg-offset-2 mt-40">
                                    <div class="NameInp exCvv">
                                        <input type="text" placeholder="CVV Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5" >
                                    <div class="cardsImg">
                                        <img src="{{asset('img/1x/visa.png')}}" height="" width="" alt="">
                                        <img src="{{asset('img/1x/master.png')}}" height="" width="" alt="">
                                        <img src="{{asset('img/1x/ax.png')}}" height="" width="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 orDivSignUp wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="orLine">
                                <span>Or use</span>
                            </div>
                        </div>
                        <div class="col-lg-2 paypalDiv wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <img src="{{asset('img/1x/paypal.png')}}" height="" width="" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center submitBtn wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <button type="submit">Confirm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection