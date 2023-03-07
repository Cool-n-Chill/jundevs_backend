<?php

namespace App\Http\Controllers\Admin\Language;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Language\UpdateRequest;
use App\Models\Language;

class UpdateController extends Controller
{
    public function __invoke(Language $language, UpdateRequest $request)
    {
        $data = $request->validated();

        $language->update($data);

        return redirect()->route('admin.language.show', $language->id);
    }
}
