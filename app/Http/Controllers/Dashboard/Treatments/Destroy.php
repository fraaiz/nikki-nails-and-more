<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;

class Destroy
{
    /**
     * @param  Treatment $treatment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Treatment $treatment): RedirectResponse
    {
        if (null === $treatment) {
            abort(404);
        }

        try {
            $treatment->delete();
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect()->route('dashboard::treatments.index');
    }
}
