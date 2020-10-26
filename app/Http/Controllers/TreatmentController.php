<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Overview of all treatments.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.treatments.index', [
            'treatments' => Treatment::all(),
        ]);
    }

    /**
     * Show treatment by slug.
     *
     * @param  string $treatmentSlug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function bySlug(string $treatmentSlug)
    {
        // Check if the treatment exists
        if (null === ($treatment = Treatment::query()->firstWhere('slug', $treatmentSlug))) {
            abort(404);
        }

        return view('pages.treatments.detail', [
            'treatment' => $treatment,
        ]);
    }
}
