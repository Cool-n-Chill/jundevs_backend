<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Skill\StoreRequest;
use App\Models\Skill;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $skill = Skill::firstOrCreate($data);

        return redirect()->route('admin.skill.index');
    }
}
