<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;

class DestroyController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('admin.vacancy.index');
    }
}
