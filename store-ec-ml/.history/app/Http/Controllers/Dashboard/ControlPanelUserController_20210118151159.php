<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CPUValidRequest;

class ControlPanelUserController extends Controller
{
    public function Index(){
        $admins=Admin::latest()->where('id','<>',auth()->id())->paginate(PAGINATION_COUNT);
        return view('admin.control.index',compact('admins'));
    }
    public function Create(){
        $role=Role::get();
      return view('admin.control.create',compact('role'));
    }
    public function Store(CPUValidRequest $request){
       
      
        $user=new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=$request->password;
        $user->role_id=$request->role_id;

        if($user->save())
        return redirect()->route('view-control-user')->with(['success'=>'sucess']);
        else
        return redirect()->route('view-control-user')->with(['fail'=>'fail']);
        
    }
    public function Edit($id){
        $admin=[];
        $admin['role']=Role::get();
        $admin['admin']=Admin::findOrFail($id);
        return view('admin.control.edit',$admin);
    }

    public function 
}
