<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Store extends \App\Http\Controllers\Controller
{
    /**
     * Store a new treatment into the database.
     *
     * @param  Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        try {
            // TODO: add validation

            $treatment = new Treatment($request->all());

            if ($request->hasFile('image')) {
                if ( ! $request->file('image')->isValid()) {
                    return redirect()->back()->withInput()->with('error', 'Given image failed to upload! Treatment is not saved!');
                }

                /** @noinspection NullPointerExceptionInspection */
                $treatment->image = $request->file('image')->store('media/images/treatments', ['disk' => 'public_public']);
            }

            $treatment->save();
        } catch (\Exception $exception) {
            Log::error('[STORE TREATMENT] ' . $exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
            return redirect()->back()->with('error', 'Failed to create treatment!');
        }

        return redirect()->route('dashboard.treatments.index')->with('success', 'Created the new treatment successfully!');
    }
}
