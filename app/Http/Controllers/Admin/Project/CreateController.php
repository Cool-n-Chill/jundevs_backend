<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Skill;

class CreateController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::all();

        return view('admin.project.create', compact('skills'));
    }
}
