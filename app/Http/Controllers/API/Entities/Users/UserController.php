<?php

namespace App\Http\Controllers\API\Entities\Users;

use App\Enums\PanelTypeEnum;
use App\Enums\UserStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\Users\UserStoreRequest;
use App\Http\Requests\Entities\Users\UserUpdateRequest;
use App\Models\Entities\Users\User;
use App\Traits\HttpResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use HttpResponse;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = $this->user->with('permissions')->latest()->get();

        $user->each(function ($user) {
            $user->humansDate = humansDate($user->created_at);
        });

        return $this->trait("get", $user);
    }

    public function store(UserStoreRequest $request)
    {
        $request->validated();

        switch ($request->permission) {
            case 'admin':
                $permission = 'admin';
                break;
            case 'plan1':
                $permission = 'plan1';
                break;
            case 'plan2':
                $permission = 'plan2';
                break;
            case 'plan3':
                $permission = 'plan3';
                break;
            case 'plan4':
                $permission = 'plan4';
                break;
        }

        $user = $this->user->create([
            'name' => ucwords($request->name),
            'email' => generateEmail($request->name),
            'password' => Hash::make($request->password),
            'is_active' => boolval($request->is_active),
            'created_at' => Carbon::now()
        ])->givePermissionTo($permission);


        return $this->trait("store", $user);
    }

    public function show($id)
    {
        $user = $this->user->with('permissions')->find($id);

        $user->permissionUser = $user->permissions[0]->name;
        $user->humansDate = humansDate($user->created_at);

        if ($user === null) {
            return $this->trait("error");
        } else {
            return $this->trait("get", $user);
        }
    }

    public function update(UserUpdateRequest $request, $id)
    {

        $request->validated();

        $user = $this->user->find($id);

        $oldUserId = $id;

        switch ($user->permissions[0]->name) {
            case 'admin':

                $oldPermission = 'admin';
                break;

            case 'plan1':
                $oldPermission = 'plan1';

                break;

            case 'plan2':
                $oldPermission = 'plan2';

                break;

            case 'plan3':
                $oldPermission = 'plan3';

                break;

            case 'plan4':
                $oldPermission = 'plan4';

                break;
        }

        $password = $request->password == null ? $user->password : Hash::make($request->password);

        $user->update([
            'name' => ucwords($request->name),
            'email' => generateEmail($request->name, $user->id),
            'password' => $password,
            'is_active' => boolval($request->is_active),
            'updated_at' => Carbon::now()
        ]);

        if ($request->permission != $oldPermission) {
            $user->revokePermissionTo($oldPermission);

            $user->givePermissionTo($request->permission);
        }

        return $this->trait("update", $user);
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);

        if ($user === null) {
            return $this->trait("error");
        } else {

            $user->delete();

            return $this->trait("delete", $user);
        }
    }
}
