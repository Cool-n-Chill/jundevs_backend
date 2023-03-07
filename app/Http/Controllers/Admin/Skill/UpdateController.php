<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Skill\UpdateRequest;
use App\Models\Skill;

class UpdateController extends Controller
{
    public function __invoke(Skill $skill, UpdateRequest $request)
    {
        $data = $request->validated();

        $skill->update($data);

        return redirect()->route('admin.skill.show', $skill->id);
    }
}
