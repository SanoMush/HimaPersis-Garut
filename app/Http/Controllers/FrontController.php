<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;

class FrontController extends Controller
{
    //
    public function index(){

        $hero_sections= HeroSection::orderByDesc('id')->take(1)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $principles= OurPrinciple::take(4)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(6)->get();
        $testimonials = Testimonial::take(6)->get();
        return view('front.index', compact('statistics', 'principles', 'products' , 'teams', 'testimonials', 'hero_sections'));
    }

    public function team(){
        $teams = OurTeam::take(16)->get();
        return view('front.team', compact('teams'));
    }
}
