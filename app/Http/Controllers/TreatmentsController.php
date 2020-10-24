<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard-pages.treatments.index');
    }
}
