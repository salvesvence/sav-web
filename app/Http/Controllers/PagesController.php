<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * Welcome page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Me page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function me()
    {
        return view('me');
    }

    /**
     * Blog page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog()
    {
        return view('blog');
    }

    /**
     * Projects page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * Contact page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
