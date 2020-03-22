<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function createProposal(){
    	return view('backend.admin.sales.create_proposal');
    }

    public function manageProposal(){
    	return view('backend.admin.sales.manage_proposal');
    }

     public function createEstimate(){
    	return view('backend.admin.sales.create_estimate');
    }

    public function manageEstimate(){
    	return view('backend.admin.sales.manage_estimate');
    }

    public function createInvoice(){
    	return view('backend.admin.sales.create_invoice');
    }

    public function manageInvoice(){
    	return view('backend.admin.sales.manage_invoice');
    }

    public function createItem(){
    	return view('backend.admin.sales.create_item');
    }

    public function manageItem(){
    	return view('backend.admin.sales.manage_item');
    }
    
    public function createTax(){
    	return view('backend.admin.sales.create_tax');
    }

    public function manageTax(){
    	return view('backend.admin.sales.manage_tax');
    }

}
