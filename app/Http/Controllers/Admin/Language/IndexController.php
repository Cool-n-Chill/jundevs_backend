<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Models\Language;

class IndexController extends Controller
{
    public function __invoke()
    {
        $languages = Language::all();

        return view('admin.language.index', compact('languages'));
    }
}
