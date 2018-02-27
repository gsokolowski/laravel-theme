<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public static function about() {

        $page = Page::findBySlug('about');
        return view('theme::pages.about', ['page'=>$page]);
    }

    public static function contact() {

        $page = Page::findBySlug('contact');
        return view('theme::pages.contact', ['page'=>$page]);
    }

    public static function gallery() {

        //$page = Page::findBySlug('gallery');
        $page = 'page';
        return view('theme::pages.gallery', ['page'=>$page]);
    }

}
