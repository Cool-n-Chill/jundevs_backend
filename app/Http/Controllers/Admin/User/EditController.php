<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $skills = Skill::all();

        return view('admin.user.edit', compact('user', 'skills'));
    }
}
