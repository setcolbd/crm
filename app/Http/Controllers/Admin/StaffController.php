<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function createDepartment(){
    	return view('backend.admin.staff.create_department');
    }

    public function manageDepartment(){
    	return view('backend.admin.staff.manage_department');
    }

    public function createStaff(){
    	return view('backend.admin.staff.create_staff');
    }

    public function manageStaff(){
    	return view('backend.admin.staff.manage_staff');
    }
}
