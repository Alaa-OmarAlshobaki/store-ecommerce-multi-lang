<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlPanelUserController extends Controller
{
    public function Index(){
        $admins=Admin::paginate(PAGINATION_COUNT);
        return view('admin.control.index',compact('admins'));
    }
    public function Create(){
        $role=Role::get();
      return view('admin.control.create',compact('role'));
    }
}
