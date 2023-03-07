<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.language.create');
    }
}
