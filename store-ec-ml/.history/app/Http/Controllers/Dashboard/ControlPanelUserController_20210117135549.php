<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlPanelUserController extends Controller
{
    public function Index(){
        $control=Admin::bagnaite(PAGINATION_COUNT);
    }
}