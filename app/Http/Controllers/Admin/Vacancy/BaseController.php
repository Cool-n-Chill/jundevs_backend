<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Services\Admin\Vacancy\Service;

class BaseController extends Controller
{
    public function __construct(protected Service $service)
    {
    }
}
