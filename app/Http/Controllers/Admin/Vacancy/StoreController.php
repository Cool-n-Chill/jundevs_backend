<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Vacancy\StoreRequest;
use App\Services\Admin\Vacancy\Service;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Service $service)
    {
        $data = $request->validated();

        $service->store($data);

        return redirect()->route('admin.vacancy.index');
    }
}
