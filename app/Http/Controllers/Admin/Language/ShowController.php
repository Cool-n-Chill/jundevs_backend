<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Models\Language;

class ShowController extends Controller
{
    public function __invoke(Language $language)
    {
        return view('admin.language.show', compact('language'));
    }
}
