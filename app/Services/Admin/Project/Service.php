<?php

namespace App\Services\Admin\Project;

use App\Models\Project;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        try {
            DB::beginTransaction();

            $data['description'] = clean($data['description']);

            if (isset($data['skill_ids'])) {
                $skillIds = $data['skill_ids'];
                unset($data['skill_ids']);
            }

            $project = Project::firstOrCreate($data);
            if (isset($skillIds)) {
                $project->skills()->attach($skillIds);
            }
            
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $project;
    }

    public function update($data, Project $project)
    {
        try {
            DB::beginTransaction();
            
            $data['description'] = clean($data['description']);

            if (isset($data['skill_ids'])) {
                $skillIds = $data['skill_ids'];
                unset($data['skill_ids']);
            }

            $project->update($data);
            if (isset($skillIds)) {
                $project->skills()->sync($skillIds);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $project->fresh();
    }
}
