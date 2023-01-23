<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class SoftController extends Controller
{
    public function index()
    {
        $title = 'About - Archive Question';
        return view('admincomponent.about.softQuestion', [
            // 'questions' => Question::where('id', 1)->get(),
            // 'questions' => Question::latest()->get(),
            'softDeleted' => Question::onlyTrashed()->latest()->get(),
            'title' => $title,
        ]);
    }
}
