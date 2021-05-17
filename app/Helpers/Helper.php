<?php

use App\Models\User;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Setting;
use Carbon\Carbon;

function get_main_logo(){
    if(!$image = (Logo::where('type', 'main')->first())->image){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $image;
}

function get_footer_logo(){
    if(!$image = (Logo::where('type', 'footer')->first())->image){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $image;
}

function get_favicon_logo(){
    if(!$image = (Logo::where('type', 'favicon')->first())->image){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $image;
}

function get_banner_by_page($page){
    if(!$banner = Banner::where('page', $page)->first()){
        return asset('img/noimg.jpg');
    }
    return $banner;
}

function get_setting_by_key($key){
    if(!$setting = Setting::where('key', $key)->first()){
        return '';
    }
    return $setting->value;
}

function return_date($date)
{
    return Carbon::parse($date)->format('j F, Y. h:i a');
}

function return_date_wo_time($date){
    return Carbon::parse($date)->format('j F, Y.');
}

function return_date_pdf($date)
{
    return Carbon::parse($date)->format('j F, Y');
}

function return_todays_date()
{
    return Carbon::now();
}

function return_user_name($id)
{
    $user = User::find($id);
    return optional($user)->name;
}

function return_decimal_number($foo)
{
    return number_format((float)$foo, 2, '.', '');
}

function count_by_type($type){
    if($type == "All"){
        $count = count(User::all());
    }
    else{
        $count = count(User::where('type', $type)->get());
    }
    
    return $count;
}