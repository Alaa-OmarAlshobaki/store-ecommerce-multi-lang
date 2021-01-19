<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolesValidRequest;

class RolesController extends Controller
{

    public function Index()
    {
        $roles = Role::paginate(PAGINATION_COUNT);
        return view('admin.roles.index', compact('roles'));
    }
    public function AddPermission(Request $request)
    {
        return view('admin.roles.create');
    }
    public function StorePermission(RolesValidRequest $request)
    {
        // try {
            $role = $this->Process(new Role, $request);
            return $role;
            if ($role)

                return redirect()->route('view-roles')->with(['success' => 'تم ألاضافة بنجاح']);
            else
                return redirect()->route('view-roles')->with(['error' => 'رساله الخطا']);
        // } catch (\Exception $ex) {
        //     return $ex;
        //     return redirect()->route('admin.roles.index')->with(['fail' => 'there is error on exception ']);
        // }
    }

    public function Process(Role $role, Request $re)
    {
        return $re;
        $role->name = $re->name;
        $role->permission = json_encode($re->permissions);
        $role->save();
        return $role;
    }
}