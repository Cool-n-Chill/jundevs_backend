<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;

class IndexController extends Controller
{
    public function __invoke()
    {
        $vacancies = Vacancy::all();

        return view('admin.vacancy.index', compact('vacancies'));
    }
}
