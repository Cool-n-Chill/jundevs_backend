<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.skill.create');
    }
}
