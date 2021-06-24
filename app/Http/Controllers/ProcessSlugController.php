<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Contracts\View\View;

class ProcessSlugController extends Controller
{
    /**
     * @param  string $slug
     * @return View
     */
    public function __invoke(string $slug): View
    {
        $treatment = Treatment::query()
            ->where('slug', $slug)
            ->where('enabled', true)
            ->first();

        if (null === $treatment) {
            abort(404);
        }

        return view('treatment.index', compact('treatment'));
    }
}
