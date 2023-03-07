<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Project;
use App\Models\Skill;

class CreateController extends Controller
{
    public function __invoke()
    {
        $languages = Language::all();
        $projects = Project::all();
        $skills = Skill::all();

        return view('admin.vacancy.create', compact('languages', 'projects', 'skills'));
    }
}
