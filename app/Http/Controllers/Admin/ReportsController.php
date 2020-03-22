<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function proposalReport(){
    	return view('backend.admin.reports.proposal');
    }

    public function estimateReport(){
    	return view('backend.admin.reports.estimate');
    }

    public function invoiceReport(){
    	return view('backend.admin.reports.invoice');
    }
}
