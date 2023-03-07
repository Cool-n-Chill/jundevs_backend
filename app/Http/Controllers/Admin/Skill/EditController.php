<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;

class EditController extends Controller
{
    public function __invoke(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }
}
