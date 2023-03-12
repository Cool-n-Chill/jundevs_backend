<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use App\Services\Admin\User\Service;

class UpdateController extends Controller
{
    public function __invoke(User $user, UpdateRequest $request, Service $service)
    {
        $data = $request->validated();

        $service->update($data, $user);

        return redirect()->route('admin.user.show', $user->id);
    }
}
