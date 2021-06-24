<?php

namespace App\Http\Controllers\Dashboard\Treatments;

use App\Http\Requests\TreatmentRequest;
use App\Models\Treatment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class Update
{
    /**
     * @param  TreatmentRequest $request
     * @param  Treatment $treatment
     * @return RedirectResponse
     */
    public function __invoke(TreatmentRequest $request, Treatment $treatment): RedirectResponse
    {
        if (null === $treatment) {
            abort(404);
        }

        try {
            $treatment->fill([
                'enabled' => $request->boolean('enabled'),
                'in_menu' => $request->boolean('in_menu'),
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'slug' => $request->get('slug') ?? Str::slug($request->get('title')),
                'last_edit_by' => auth()->user()->id,
            ]);
            $treatment->save();
        } catch (\Exception $exception) {
            dd($exception);
            // TODO: @Mike - find out how to give back errors to the frontend
        }

        return back(303);
    }
}
