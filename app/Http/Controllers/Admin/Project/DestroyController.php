<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class DestroyController extends Controller
{
    public function __invoke(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.project.index');
    }
}
