<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Services\Admin\Project\Service;

class BaseController extends Controller
{
    public function __construct(protected Service $service)
    {
    }
}
