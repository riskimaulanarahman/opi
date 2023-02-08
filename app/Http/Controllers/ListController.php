<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Module;
use App\Models\Employee;
use App\Models\Icon;
use App\Models\SideMenu;
use App\Models\Sequence;

class ListController extends Controller
{
    
    public function listModule() {
        return Module::select('id','module')->get();
    }

    public function listEmployee() {
        return Employee::select('id','fullname')->get();
    }
    
    public function listSideMenu() {
        return SideMenu::select('id','title')->get();
    }
    
    public function listIcon() {
        return Icon::select('id','name')->get();
    }

    public function listSequence() {
        return Sequence::select('id','title')->get();
    }

}
