<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Inertia\Inertia;
use Inertia\Response;

class Index
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        $treatments = Treatment::all();

        return Inertia::render('Dashboard/Treatments/Index', compact('treatments'));
    }
}
