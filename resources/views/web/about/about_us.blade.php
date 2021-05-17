@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->
    @php $banner = get_banner_by_page('About Us Main'); @endphp
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="aboutUsMain">
        <div class="banner">
            <div >
                <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">About Us</h1>
            </div>
        </div>
        <div class="content text-center mt-40">
            {!!$banner->description!!}

            <!-- features include -->
            <div class="col-lg-12">
                <h2 class="mt-90 wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">features include</h2>
            </div>
            <div class="bullets mt-20">
                @foreach($features as $feature)
                    @php $class = (($loop->index % 2 == 0) ? 'fadeInLeft' : 'fadeInRight') @endphp
                    <div class="col-lg-6 mt-40 wow {{$class}}" data-wow-delay="1s" data-wow-duration="2s">
                        <img src="{{asset('img/1x/dot.svg')}}" height="12px" width="" alt="">
                        <div>
                            {{$feature->content}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection