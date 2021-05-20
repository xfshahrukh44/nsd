<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\Package;

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
}
