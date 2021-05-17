@extends('web.layouts.master')

@section('content')
    <!-- topBanner with nav -->
    @php $banner = get_banner_by_page('Main') @endphp
    <div class="mainBanner" style="background: url({{asset('img/banners') . '/' . $banner->image}});background-size: cover;background-position-x: 86%;">
        <div class="mainBarContent">
            <div class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                <div class="prideand">{{$banner->title}}</div>
                <div class="passionmeet">{{$banner->subtitle}}</div>
                <div class="success">{{$banner->description}}</div>
            </div>
            <div class="btnDiv wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="3s">
                <button class="explore">Explore</button>
            </div>
            <p class="wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="3s">
            <a href="{{get_setting_by_key('Twitter')}}" target="_blank">
                <img src="{{asset('img/1x/twitter.svg')}}" alt="" width="" height="24px">
            </a>
            <a href="{{get_setting_by_key('Instagram')}}" target="_blank">
                <img src="{{asset('img/1x/instagrame.svg')}}" alt="" height="24px" width="" style="margin-left: 10px;">
            </a>
            </p>
        </div>

        <!-- sidebars -->
            <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">
        </div>

        <!-- AboutUs section -->
        @php $banner = get_banner_by_page('About Us Home') @endphp
        <div class="secondSec">
            <div class="row">
                <div class="col-lg-12 text-center aboutUsHeading wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
                    {{$banner->title}}
                </div>
                <div class="col-md-12 aboutUsTxt text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                    <p>
                        {{$banner->subtitle}}
                    </p>
                    <p>
                        {{$banner->description}} 
                    </p>
                    <button class="explore">
                        <a href="{{route('about_us')}}">
                            Load More
                        </a>
                    </button>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 text-center statesHeading wow fadeInDown" data-wow-delay="1s" data-wow-duration="2s">
                    States
                </div>

                <!-- carousals -->

                <!-- kickers section -->
                <div class="col-lg-12 text-left kickersHeading wow fadeInLeft" data-wow-delay="1.2s" data-wow-duration="2s">
                    Kickers
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme wow zoomIn" data-wow-delay="1.3s" data-wow-duration="2s">
                        <div class="item  " >
                            <div class="img">
                                <img src="{{asset('img/1x/product.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="item  " >
                            <div class="img">
                                <img src="{{asset('img/1x/product.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="item  " >
                            <div class="img">
                                <img src="{{asset('img/1x/product.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="item " >
                            <div class="img">
                                <img src="{{asset('img/1x/product.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Punters section -->
                <div class="col-lg-12 text-left kickersHeading mt-70 wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="2s">
                    Punters
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme wow zoomIn" data-wow-delay="0.5s" data-wow-duration="2s">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/punters.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/punters.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/punters.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/punters.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LongSnappers section -->
                <div class="col-lg-12 text-left kickersHeading mt-70 wow fadeInLeft" data-wow-delay="0.1s" data-wow-duration="2s">
                    LongSnappers
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme wow zoomIn" data-wow-delay="0.5s" data-wow-duration="2s">
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/longsnappers.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/longsnappers.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/longsnappers.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="{{asset('img/1x/longsnappers.jpg')}}" alt="" height="" width="">
                            </div>
                            <div class="name">
                                JOHN SMITH
                            </div>
                            <div class="rating">
                                <div class="dflex justify-space-between">
                                    <div>Rating</div>
                                    <div>85%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- News Articles section -->
                <div class="col-lg-12 text-center newsArrHeading mt-100 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                    News<br/>Articles
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme wow zoomIn" data-wow-delay="1.5s" data-wow-duration="2s">
                        @foreach($articles as $article)
                            <div class="item">
                                <a href="{{$article->link}}" target="_blank">
                                    <div class="img">
                                        <img src="{{asset('img/articles') . '/' . $article->image}}" alt="" height="" width="">
                                    </div>
                                </a>
                                <div class="para" style="text-decoration: none;">
                                    {{$article->content}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 text-center ">
                    <button class="explore loadmorebtn mt-70 wow fadeInDown" data-wow-delay="1.3s" data-wow-duration="2s">
                        <a href="{{route('articles')}}">
                            Load More
                        </a>
                    </button>
                </div>

                 <!-- Exposure Opportunities section -->
                <div class="col-lg-12 text-center newsArrHeading mt-100 wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s">
                    Exposure<br/>Opportunities
                </div>
                <div class="col-lg-12 ">
                    <div class="exposureMain ">
                        @foreach($exposure_opportunities as $exposure_opportunity)
                            <div class="Exposurebox wow fadeInRight" data-wow-delay="1s" data-wow-duration="2s">
                                <div class="icon">
                                    <img src="{{asset($exposure_opportunity['icon'])}}" alt="" height="" width="">
                                </div>
                                <div class="txt">
                                    {{$exposure_opportunity['content']}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        <!-- Video Banner -->
        @php $banner = get_banner_by_page('Main Video') @endphp
        <div class="videoBanner">
            <img src="{{asset('img/banners') . '/' . $banner->image}}" alt="" height="" width="" >
            <div class="afterVideo" data-toggle="modal" data-target="#myModal"></div>
        </div>
        <!-- video Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog" >
        
                <!-- Modal content-->
                <div class="modal-content">
                    <button data-dismiss="modal">&#x2716;</button>
                    <div class="modal-body" >
                    <iframe width="100%" height="100%" src="{{$banner->description}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
        
            </div>
        </div>

        <!-- Special Thanks -->
        <div class="col-lg-12 text-center ThanksHeading mt-70 newsArrHeading mt-100 wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s">
            Special Thanks to
        </div>
        <div class="col-lg-12">
            <div class="thanksmain">
                <div class="Thanksimages">
                    @foreach($brands as $brand)
                        <a href="{{$brand->link ? $brand->link : '#'}}" target="_blank">
                            <img src="{{asset('img/brands') . '/' . $brand->image}}" height="" width="" alt="" class="wow zoomIn" data-wow-delay="1.5s" data-wow-duration="2s">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
@endsection