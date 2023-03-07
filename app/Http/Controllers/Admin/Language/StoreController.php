<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Language\StoreRequest;
use App\Models\Language;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $language = Language::firstOrCreate($data);

        return redirect()->route('admin.language.index');
    }
}
