<?php

namespace App\Http\Controllers;
use App\Models\AdminInfo;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSeo;
use App\Models\GlobalSeo;
use App\Models\PageSeo;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class frontendController extends Controller
{

   function home(){
        $pageseo = PageSeo::where('pagename', 'Home')->get();
        $homepageseo = PageSeo::where('pagename', 'Home')->get();
        $gseo = GlobalSeo::find(1);
        return view('home', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    function insights(){
       
        $pageseo = PageSeo::where('slug', 'insights')->get();
        $gseo = GlobalSeo::find(1);
        return view('insights', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function expertise(){
        $pageseo = PageSeo::where('slug', 'home')->get();
        $gseo = GlobalSeo::find(1);
        return view('expertise', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function resources(){
        $pageseo = PageSeo::where('slug', 'home')->get();
        $gseo = GlobalSeo::find(1);
        return view('resources', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }
    function services(){
        $pageseo = PageSeo::where('slug', 'home')->get();
        $gseo = GlobalSeo::find(1);
        return view('services', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function about(){
        $pageseo = PageSeo::where('slug', 'about')->get();
        $gseo = GlobalSeo::find(1);
        return view('about', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function blog(){
        $pageseo = PageSeo::where('slug', 'blog')->get();
        $gseo = GlobalSeo::find(1);
        return view('blog', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }
    function contact(){
        $pageseo = PageSeo::where('slug', 'blog')->get();
        $gseo = GlobalSeo::find(1);
        return view('contact', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function submitcv(){
        $pageseo = PageSeo::where('slug', 'submit-cv')->get();
        $gseo = GlobalSeo::find(1);
        return view('submitcv', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function ecareers(){
        $pageseo = PageSeo::where('slug', 'executive-careers')->get();
        $gseo = GlobalSeo::find(1);
        return view('executive-careers', ['pageseo'=>$pageseo,'gseo'=>$gseo]);
    }

    function sendcontact(Request $req){
        $name = $req->name;
        $pwd = $req->pwd;
        $textarea = $req->textarea;

        $mailData = [
            'name' => $name,
            'pwd' => $pwd,
            'body' => $textarea,
        ];
          
        Mail::to('devendrasingh991731@gmail.com')->send(new ContactMail($mailData));
        return true;
    }

    function singleblog($slug){
        $seo = BlogSeo::where('canonical', $slug)->get();
        $blog = Blog::where('slug', $slug)->first();
        $gseo = GlobalSeo::find(1);
        $cblog = DB::table('blogs')
                ->leftJoin('blogs_categories', 'blogs.category', '=', 'blogs_categories.id')
                ->where('blogs_categories.id', $blog->category)
                ->take(6)
                ->get();
         
        $allblogs = Blog::all();
        return view('single-blog',['seo'=>$seo,'blog'=>$blog,'gseo'=>$gseo,'cblog'=>$cblog,'allblogs'=>$allblogs]);
    }
  
}