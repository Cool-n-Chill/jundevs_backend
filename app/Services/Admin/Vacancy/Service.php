<?php

namespace App\Services\Admin\Vacancy;

use App\Models\Vacancy;
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

            $vacancy = Vacancy::firstOrCreate($data);
            if (isset($skillIds)) {
                $vacancy->skills()->attach($skillIds);
            }
            
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $vacancy;
    }

    public function update($data, Vacancy $vacancy)
    {
        try {
            DB::beginTransaction();
            
            $data['description'] = clean($data['description']);

            if (isset($data['skill_ids'])) {
                $skillIds = $data['skill_ids'];
                unset($data['skill_ids']);
            }

            $vacancy->update($data);
            if (isset($skillIds)) {
                $vacancy->skills()->sync($skillIds);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $vacancy->fresh();
    }
}
