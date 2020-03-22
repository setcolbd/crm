<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function createLead(){
    	return view('backend.admin.lead.create_lead');
    }

     public function leadManage(){
    	return view('backend.admin.lead.lead_manage');
    }

    public function createLeadHistory(){
    	return view('backend.admin.lead.create_history');
    }
    
    public function leadCallHistory(){
    	return view('backend.admin.lead.lead_call_history');
    }

    public function createAppoinment(){
    	return view('backend.admin.lead.create_appointment');
    }

    public function leadAppoinmentInfo(){
    	return view('backend.admin.lead.appointment_info');
    }

    public function createNote(){
    	return view('backend.admin.lead.create_note');
    }

     public function noteInfo(){
    	return view('backend.admin.lead.note_info');
    }
}
