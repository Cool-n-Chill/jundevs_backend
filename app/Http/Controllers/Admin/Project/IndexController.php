<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class IndexController extends Controller
{
    public function __invoke()
    {
        $projects = Project::all();

        return view('admin.project.index', compact('projects'));
    }
}
