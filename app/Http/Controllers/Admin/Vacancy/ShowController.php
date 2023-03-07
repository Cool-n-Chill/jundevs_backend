<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;

class ShowController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        return view('admin.vacancy.show', compact('vacancy'));
    }
}
