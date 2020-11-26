<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Illuminate\Support\Facades\Log;

class Destroy extends \App\Http\Controllers\Controller
{
    /**
     * Destroy the given treatment.
     *
     * @param  Treatment $treatment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Treatment $treatment)
    {
        if (null === $treatment) {
            abort(404);
        }

        try {
            $treatment->delete();
        } catch (\Exception $exception) {
            Log::error('[DESTROY TREATMENT] ' . $exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
            return redirect()->back()->with('error', 'Failed to destroy treatment!');
        }

        return redirect()->back()->with('success', 'The treatment is destroyed with success!');
    }
}
