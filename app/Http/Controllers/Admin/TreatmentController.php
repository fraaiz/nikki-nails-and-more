<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = Treatment::query()->orderBy('created_at')->get();
        return view('admin.treatments.index', ['treatments' => $treatments]);
    }

    public function add()
    {
        return view('admin.treatments.add');
    }

    public function store(Request $request)
    {
        $treatment = new Treatment($request->all());
        $treatment->save();

        return redirect()->route('admin::treatments');
    }

    public function edit(Treatment $treatment)
    {
        if (null === $treatment) {
            abort(404);
        }

        return view('admin.treatments.edit', [
            'treatment' => $treatment,
        ]);
    }

    public function update(Request $request, Treatment $treatment)
    {
        if (null === $treatment) {
            abort(404);
        }

        $treatment->fill($request->all());
        $treatment->save();

        return redirect()->route('admin::treatments');
    }


    public function delete(Treatment $treatment)
    {

        $treatment->delete();


        return redirect()->route('admin::treatments');
    }





}

