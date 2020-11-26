<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Edit extends \App\Http\Controllers\Controller
{
    /**
     * Show the edit treatment page.
     *
     * @param  Treatment $treatment
     * @return Application|Factory|View
     */
    public function __invoke(Treatment $treatment)
    {
        if (null === $treatment) {
            abort(404);
        }

        return view('dashboard-pages.treatments.edit', compact('treatment'));
    }
}
