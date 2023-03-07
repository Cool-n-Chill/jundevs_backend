<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Vacancy;
use App\Models\Language;
use App\Models\Project;

class EditController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $languages = Language::all();
        $projects = Project::all();
        $skills = Skill::all();

        return view('admin.vacancy.edit', compact('vacancy', 'languages', 'projects', 'skills'));
    }
}
