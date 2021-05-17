@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="kickersListMain">
        <div class="col-lg-12 text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Kickers</h1>
        </div>
        <div class="container ">
            <div class="col-lg-12 mt-50">
                <div class="fakeTable">
                    <div class="fthead">
                        <div>Rank</div>
                        <div>Name</div>
                        <div>State</div>
                        <div>Offers</div>
                        <div>Committed</div>
                        <div>Prospect</div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                    <div class="ftbody" >
                        <div><a href="javascript:void;">1</a></div>
                        <div><a href="profile-view.html">John Smith</a></div>
                        <div><a href="javascript:void;">CA</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div><a href="javascript:void;">SDSU</a></div>
                        <div>
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width=""  alt="">
                            <img src="{{asset('img/1x/starhalf-8.png')}}" height="20px" width="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection