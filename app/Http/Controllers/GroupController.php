<?php

namespace App\Http\Controllers;

use App\Http\Enums\GroupUserRole;
use App\Http\Enums\GroupUserStatus;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use App\Models\GroupUser;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function store(StoreGroupRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $group = Group::create($data);

        $groupUserData = [
            'status' => GroupUserStatus::APPROVED->value,
            'role' => GroupUserRole::ADMIN->value,
            'group_id' => $group->id,
            'user_id' => Auth::id(),
            'created_by' => Auth::id(),
        ];

        GroupUser::create($groupUserData);

        return response(new GroupResource($group), 201);
    }
}
