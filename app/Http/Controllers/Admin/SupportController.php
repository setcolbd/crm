<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function createTicket(){
    	return view('backend.admin.support.create_ticket');
    }

    public function manageTicket(){
    	return view('backend.admin.support.manage_ticket');
    }
}
