<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Models\Language;

class DestroyController extends Controller
{
    public function __invoke(Language $language)
    {
        $language->delete();

        return redirect()->route('admin.language.index');
    }
}
