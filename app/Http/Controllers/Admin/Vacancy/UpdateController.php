<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Vacancy\UpdateRequest;
use App\Models\Vacancy;
use App\Services\Admin\Vacancy\Service;

class UpdateController extends Controller
{
    public function __invoke(Vacancy $vacancy, UpdateRequest $request, Service $service)
    {
        $data = $request->validated();

        $service->update($data, $vacancy);

        return redirect()->route('admin.vacancy.show', $vacancy->id);
    }
}
