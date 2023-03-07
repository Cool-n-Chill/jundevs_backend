<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Models\Language;

class EditController extends Controller
{
    public function __invoke(Language $language)
    {
        return view('admin.language.edit', compact('language'));
    }
}
