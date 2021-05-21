<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{env('APP_NAME')}}">
    <meta name="robots" content="index, follow" />
    <title>{{env('APP_NAME')}}</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('img/SVG/fab.svg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- owl carousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

</head>
<body style="background-color: {{ (request()->is('my_profile')) ? '#fff!important;' : '#000!important;' }}" class="">
    
    <div class="container-fluid topMain">
        <!-- header -->
        <div class="nav" id="navbar">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{get_main_logo()}}" height="" width="" alt="">
                </a>
            </div>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about_us')}}">About</a></li>
                <li><a href="{{route('kickers')}}">Kickers</a></li>
                <li><a href="{{route('kickers')}}">Punters</a></li>
                <li><a href="{{route('kickers')}}">Long Snappers</a></li>
                <li><a href="{{route('packages')}}">Packages</a></li>
                @auth
                    <li><a href="{{route('my_profile')}}">My Profile</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                        @csrf
                    </form>
                @else
                    <li><a href="{{route('web_login')}}">Login</a></li>
                    <li><a href="{{route('web_register')}}">register</a></li>
                @endauth
            </ul>
            <div class="search">
                <input type="text" name="" id="" placeholder="Search">
            </div>
        </div>

        @yield('content')

        <!-- Footer -->
        <div class="col-md-12 mt-80 footer">
            <footer>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo text-center">
                            <a href="{{route('home')}}">
                                <img src="{{get_footer_logo()}}" height="" width="" class="flogo" alt="">
                            </a>
                            <div class="icons">
                                <a href="{{get_setting_by_key('Twitter')}}" target="_blank">
                                    <img src="{{asset('img/1x/twitter.svg')}}" height="" width="" alt="" class="mt-30">
                                </a>
                                <a href="{{get_setting_by_key('Instagram')}}" target="_blank">
                                    <img src="{{asset('img/1x/instagrame.svg')}}" height="" width="" alt="" class="mt-30" style="margin-left: 10px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 links col-sm-6">
                        <h2>Links</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about_us')}}">About</a></li>
                            <li><a href="{{route('kickers')}}">Kickers</a></li>
                            <li><a href="{{route('kickers')}}">Punters</a></li>
                            <li><a href="{{route('kickers')}}">Long Snappers</a></li>
                            <li><a href="{{route('contact_us')}}">contact</a></li>
                            <li><a href="{{route('packages')}}">Packages</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 contact">
                        <h2>Contact Us</h2>
                        <div class="address">
                            <div class="icon">
                                <img src="{{asset('img/1x/location.png')}}" height="" width="" alt="">
                            </div>
                            <div class="txt">
                                {{get_setting_by_key('Address Line 1')}} <br/>
                                {{get_setting_by_key('Address Line 2')}}
                            </div>
                        </div>
                        <div class="phone">
                            <div class="icon">
                                <img src="{{asset('img/1x/phone.png')}}" height="" width="" alt="">
                            </div>
                            <div class="txt">
                            {{get_setting_by_key('Contact Number')}}
                            </div>
                        </div>
                        <div class="email">
                            <div class="txt">
                                <span>Media Requests</span><br/>
                                <span>{{get_setting_by_key('Media Requests')}}</span>
                            </div>
                        </div>
                        <div class="website">
                            <div class="txt">
                                <span>Website/Profile Updates</span><br/>
                                <span>{{get_setting_by_key('Website/Profile Updates')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 text-center copyright mt-30">
                        copyright@designprosusa2021
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- SideMenu -->
    <div id="sideNav" style="display: none;" >
        <div class="sidemenu" id="sideMenu" style="margin-right: -500px;">
            <div class="cross" onclick="toggleMenu()">
                &times;
            </div>
            <div class="logo text-center">
                <img src="{{get_footer_logo()}}" width="" height="100%" alt="">
            </div>
            <div class="searchBar">
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <div class="links">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about_us')}}">About</a></li>
                    <li><a href="{{route('kickers')}}">Kickers</a></li>
                    <li><a href="{{route('kickers')}}">Punters</a></li>
                    <li><a href="{{route('kickers')}}">Long Snappers</a></li>
                    <li><a href="{{route('packages')}}">Packages</a></li>
                    @auth
                        <li><a href="#">My Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                            @csrf
                        </form>
                    @else
                        <li><a href="{{route('web_login')}}">Login</a></li>
                        <li><a href="{{route('web_register')}}">register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>

    <!-- owl carosal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
    <script>
    new WOW().init();
    </script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                },
                2000:{
                    items:5
                }
            }
        })
    </script>
    <noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>