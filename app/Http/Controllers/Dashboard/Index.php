<?php

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use Inertia\Response;

class Index
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard');
    }
}
