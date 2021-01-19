<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlPanelUserController extends Controller
{
    public function Index(){
        $control=Admin::pagnaite(PAGINATION_COUNT);
        return $control;
    }
}
