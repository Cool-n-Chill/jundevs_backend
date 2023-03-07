<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;

class UpdateController extends BaseController
{
    public function __invoke(Project $project, UpdateRequest $request)
    {
        $data = $request->validated();

        $this->service->update($data, $project);

        return redirect()->route('admin.project.show', $project->id);
    }
}
