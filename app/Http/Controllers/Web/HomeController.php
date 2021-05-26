<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\Package;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $exposure_opportunities = [];

        array_push($exposure_opportunities, [
            'content' => (Setting::where('key', 'Exposure Oppurtunity 1 Content')->first())->value,
            'icon' => (Setting::where('key', 'Exposure Oppurtunity 1 icon')->first())->value,
        ]);
        array_push($exposure_opportunities, [
            'content' => (Setting::where('key', 'Exposure Oppurtunity 2 Content')->first())->value,
            'icon' => (Setting::where('key', 'Exposure Oppurtunity 2 icon')->first())->value,
        ]);
        array_push($exposure_opportunities, [
            'content' => (Setting::where('key', 'Exposure Oppurtunity 3 Content')->first())->value,
            'icon' => (Setting::where('key', 'Exposure Oppurtunity 3 icon')->first())->value,
        ]);
        array_push($exposure_opportunities, [
            'content' => (Setting::where('key', 'Exposure Oppurtunity 4 Content')->first())->value,
            'icon' => (Setting::where('key', 'Exposure Oppurtunity 4 icon')->first())->value,
        ]);

        $articles = Article::all();

        $brands = Brand::all();
        
        return view('web.home.index', compact('exposure_opportunities' ,'articles', 'brands'));
    }

    public function about_us()
    {
        $features = Feature::all();
        return view('web.about.about_us', compact('features'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('web.article.articles', compact('articles'));
    }

    public function kickers()
    {
        return view('web.kicker.kickers');
    }

    public function packages()
    {
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.package.packages', compact('packages'));
    }

    public function contact_us()
    {
        return view('web.contact.contact_us');
    }

    public function web_register()
    {
        if(auth()->user()){
            if(auth()->user()->type == 'Admin' || auth()->user()->type == 'User'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.auth.register', compact('packages'));
    }

    public function web_login()
    {
        if(auth()->user()){
            if(auth()->user()->type == 'Admin' || auth()->user()->type == 'User'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
        return view('web.auth.login');
    }

    public function my_profile()
    {
        // PAYPAL STUFF
        // $result = get_paypal_access_token();
        // create_paypal_billing_plan($result['access_token']);
        // list_paypal_billing_plans($result['access_token']);
        // activate_paypal_billing_plan($result['access_token']);
        // create_paypal_billing_agreement($result['access_token']);
        // show_paypal_agreement_details($result['access_token']);
        // execute_paypal_agreement($result['access_token']);
        if(!(auth()->user())){
            return redirect()->back();
        }

        $user = User::find(auth()->user()->id);
        return view('web.profile.my_profile', compact('user'));
    }
}