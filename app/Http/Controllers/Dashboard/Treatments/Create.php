<?php

namespace App\Http\Controllers\Dashboard\Treatments;

class Create extends \App\Http\Controllers\Controller
{
    /**
     * Show the create page of treatments.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('dashboard-pages.treatments.create');
    }
}
