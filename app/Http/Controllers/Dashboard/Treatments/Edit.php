<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Inertia\Inertia;
use Inertia\Response;

class Edit
{
    /**
     * @param  Treatment $treatment
     * @return Response
     */
    public function __invoke(Treatment $treatment): Response
    {
        if (null === $treatment) {
            abort(404);
        }

        return Inertia::render('Dashboard/Treatments/Index', compact('treatment'));
    }
}
