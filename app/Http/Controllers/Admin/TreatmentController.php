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
        return view('admin.treatments', ['treatments' => $treatments]);
    }
}
