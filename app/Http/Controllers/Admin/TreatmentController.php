<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function view()
    {
        $treatments = Treatment::query()->orderBy('creation_date')->get();
        return view('admin.dashboard', ['treatments' => $treatments]);
    }
}
