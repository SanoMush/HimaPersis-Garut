<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\CompanyAbout;
use App\Models\Article;

class FrontController extends Controller
{
    //
    public function index(){

        $hero_sections= HeroSection::orderByDesc('id')->take(1)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $principles= OurPrinciple::take(4)->get();
        $projects = Product::latest()->get();
        $teams = OurTeam::take(4)->get();
        $testimonials = Testimonial::take(6)->get();
        return view('front.index', compact('statistics', 'principles', 'projects' , 'teams', 'testimonials', 'hero_sections'));
    }

    public function team(){
        $teams = OurTeam::take(16)->get();
        $statistics = CompanyStatistic::take(4)->get();
        return view('front.team', compact('teams','statistics'));
    }
    public function about()
    {
        $abouts = CompanyAbout::oldest()->get();
        return view('front.about', compact('abouts')); 
    }

    public function blog()
    {
   
        $articles = Article::latest()->paginate(9); 
        return view('front.blog', compact('articles'));
    }

    public function projects()
    {
        $projects = Product::latest()->get();
        return view('front.projects', compact('projects'));
    }


public function details(Product $product)
{
    // Mengambil project lain untuk bagian "Project Lainnya"
    $other_projects = Product::where('id', '!=', $product->id)->take(3)->get();

    return view('front.details', compact('product', 'other_projects'));
}

    public function article_details($slug)
    {
        // Cari artikel berdasarkan slug-nya
        $article = Article::where('slug', $slug)->firstOrFail();
        
        // Ambil 3 artikel terbaru lainnya (selain yang ini)
        $related_articles = Article::where('slug', '!=', $slug)
                                    ->latest()
                                    ->take(3)
                                    ->get();

        return view('front.article_details', compact('article', 'related_articles'));
    }
}
