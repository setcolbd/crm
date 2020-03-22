<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(){
    	return view('backend.admin.project.create_project');
    }

    public function manageProject(){
    	return view('backend.admin.project.manage_project');
    }

      public function createTask(){
    	return view('backend.admin.project.create_Task');
    }

    public function manageTask(){
    	return view('backend.admin.project.manage_task');
    }
}
