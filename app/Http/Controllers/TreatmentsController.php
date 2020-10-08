<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    public function view()
    {
        return view('treatments');
    }

//    public function detail(string $treatment)
//    {
//        return view('', [
//            'treatment' => Treatment::query()->where('slug', $treatment)->first()
//        ]);
//    }


}
