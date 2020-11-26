<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Update extends \App\Http\Controllers\Controller
{
    /**
     * Update the given treatment.
     *
     * @param  Request $request
     * @param  Treatment $treatment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request, Treatment $treatment)
    {
        if (null === $treatment) {
            abort(404);
        }

        try {
            // TODO: Add validation

            $treatment->fill($request->all());

            if ($request->hasFile('image')) {
                if ( ! $request->file('image')->isValid()) {
                    return redirect()->back()->withInput()->with('error', 'Given image failed to upload! Treatment is not saved!');
                }

                /** @noinspection NullPointerExceptionInspection */
                $treatment->image = $request->file('image')->store('media/images/treatments', ['disk' => 'public_public']);
            }

            $treatment->save();
        } catch (\Exception $exception) {
            Log::error('[UPDATE TREATMENT] ' . $exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
            return redirect()->back()->with('error', 'Failed to update treatment!');
        }

        return redirect()->route('dashboard.treatments.index')->with('success', 'Updated the treatment successfully!');
    }
}
