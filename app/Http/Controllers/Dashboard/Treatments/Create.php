<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use Inertia\Inertia;
use Inertia\Response;

class Create
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard/Treatments/Create');
    }
}
