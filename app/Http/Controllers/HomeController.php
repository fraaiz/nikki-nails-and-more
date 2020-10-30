<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Overview of all treatments.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('welcome', [
            'treatments' => Treatment::limit(3)->get(),
        ]);
    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function index()
//    {
//        return view('welcome');
//    }

}
