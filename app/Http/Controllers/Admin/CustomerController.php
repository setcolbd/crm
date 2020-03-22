<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function createCustomer(){
    	return view('backend.admin.customer.create_customer');
    }

    public function customerManage(){
    	return view('backend.admin.customer.manage_customer');
    }

    public function customerDetail(){
    	return view('backend.admin.customer.customer_details');
    }

    public function createCustomerHistory(){
    	return view('backend.admin.customer.create_call_history');
    }

    public function callHistory(){
    	return view('backend.admin.customer.call_history');
    }

    public function createAppoinment(){
    	return view('backend.admin.customer.create_appointment');
    }

    public function appoinmentInfo(){
    	return view('backend.admin.customer.appointment_info');
    }

    public function createNote(){
    	return view('backend.admin.customer.create_note');
    }

    public function noteInfo(){
    	return view('backend.admin.customer.note_info');
    }
}
