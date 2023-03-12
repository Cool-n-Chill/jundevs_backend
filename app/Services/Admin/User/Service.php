<?php

namespace App\Services\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class Service
{
    public function update($data, User $user)
    {
        try {
            DB::beginTransaction();
            
            $data['description'] = clean($data['description']);

            if (isset($data['skill_ids'])) {
                $skillIds = $data['skill_ids'];
                unset($data['skill_ids']);
            }

            $user->update($data);
            
            if (isset($skillIds)) {
                $user->skills()->sync($skillIds);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $user->fresh();
    }
}
