<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the home page.
     *
     * @return void
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Show the news page.
     *
     * @return void
     */
    public function news()
    {
        return view('pages.news');
    }

    /**
     * Show the account page.
     *
     * @return void
     */
    public function account()
    {
        return view('pages.account');
    }

    /**
     * Show the profile page.
     *
     * @return void
     */
    public function profile()
    {
        return view('pages.profile');
    }

    /**
     * Show the admin page.
     *
     * @return void
     */
    public function admin()
    {
        return view('pages.admin');
    }
}
