<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ShowController extends Controller
{
    public function __invoke(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }
}
