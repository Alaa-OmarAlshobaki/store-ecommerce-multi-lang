<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    
    public function Index(){
        $roles=Role::paginate(PAGINATION_COUNT)
        

    }
}
