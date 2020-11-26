<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Http\Controllers\Controller;
use App\Models\Treatment;

class Index extends Controller
{
    /**
     * Show the treatments overview page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        $treatments = Treatment::all();
        return view('dashboard-pages.treatments.index', compact('treatments'));
    }
}
