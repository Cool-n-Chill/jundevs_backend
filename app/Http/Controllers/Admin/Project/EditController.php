<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;

class EditController extends Controller
{
    public function __invoke(Project $project)
    {
        $skills = Skill::all();
        
        return view('admin.project.edit', compact('project', 'skills'));
    }
}
