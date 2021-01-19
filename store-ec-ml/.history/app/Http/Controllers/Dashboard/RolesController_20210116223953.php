<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolesValidRequest;

class RolesController extends Controller
{
    
    public function Index(){
        $roles=Role::paginate(PAGINATION_COUNT);
        return view('admin.roles.index',compact('roles'));

    }
    public function AddPermission(Request $request){
        return view('admin.roles.create');

    }
    public function StorePermission(RolesValidRequest $request){
        try{

        }
        catch(\Exception $ex){
            
        }
        
    }

    public function Process(Role $role,Request $re){
        $role->name=$re->name;
        $role->permission=json_encode($re->permission);
        $role->save();
        return $role;
    }
}
