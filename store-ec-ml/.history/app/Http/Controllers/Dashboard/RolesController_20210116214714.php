<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    
    public function Index(){
        $roles=Role::paginate(PAGINATION_COUNT);
        return view('admin.roles.index',compact('roles'));

    }
    public function AddPermission(Request $request){
        return $request;

    }
}
