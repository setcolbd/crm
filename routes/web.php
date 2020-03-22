<?php

Route::get('/', function () {
    return view('login');
});

// lead routes
Route::get('lead-create-lead','Admin\LeadController@createLead')->name('admin.lead.create');
Route::get('lead-manage-lead','Admin\LeadController@leadManage')->name('admin.lead.manage');
Route::get('lead-create-call-history','Admin\LeadController@createLeadHistory')->name('admin.lead.history.create');
Route::get('lead-call-history','Admin\LeadController@leadCallHistory')->name('admin.lead.call.history');
Route::get('lead-create-appoinment','Admin\LeadController@createAppoinment')->name('admin.lead.create.appointment');
Route::get('lead-appointment-info','Admin\LeadController@leadAppoinmentInfo')->name('admin.lead.appointment.info');
Route::get('lead-create-note','Admin\LeadController@createNote')->name('admin.lead.create.note');
Route::get('lead-note-info','Admin\LeadController@noteInfo')->name('admin.lead.note.info');


// lead routes
Route::get('customer-create-customer','Admin\CustomerController@createCustomer')->name('admin.create.customer');
Route::get('customer-manage-customer','Admin\CustomerController@customerManage')->name('admin.customer.manage');
Route::get('customer-details','Admin\CustomerController@customerDetail')->name('admin.customer.details');
Route::get('customer-create-call-history','Admin\CustomerController@createCustomerHistory')->name('admin.customer.call.history.create');
Route::get('customer-call-history','Admin\CustomerController@callHistory')->name('admin.customer.call.history');
Route::get('customer-create-appointment','Admin\CustomerController@createAppoinment')->name('admin.customer.create.appointment');
Route::get('customer-appointment-info','Admin\CustomerController@appoinmentInfo')->name('admin.customer.appointment.info');
Route::get('customer-create-note','Admin\CustomerController@createNote')->name('admin.customer.create.note');
Route::get('customer-note-info','Admin\CustomerController@noteInfo')->name('admin.customer.note.info');

// sales routes
Route::get('sales-create-proposal','Admin\SalesController@createProposal')->name('admin.sales.create.proposal');
Route::get('sales-manage-proposal','Admin\SalesController@manageProposal')->name('admin.sales.manage.proposal');
Route::get('sales-create-estimate','Admin\SalesController@createEstimate')->name('admin.sales.create.estimate');
Route::get('sales-manage-estimate','Admin\SalesController@manageEstimate')->name('admin.sales.manage.estimate');
Route::get('sales-create-invoice','Admin\SalesController@createInvoice')->name('admin.sales.create.invoice');
Route::get('sales-manage-invoice','Admin\SalesController@manageInvoice')->name('admin.sales.manage.invoice');
Route::get('sales-create-item','Admin\SalesController@createItem')->name('admin.sales.create.item');
Route::get('sales-manage-item','Admin\SalesController@manageItem')->name('admin.sales.manage.item');
Route::get('sales-create-tax','Admin\SalesController@createTax')->name('admin.sales.create.tax');
Route::get('sales-manage-tax','Admin\SalesController@manageTax')->name('admin.sales.manage.tax');

// project routes
Route::get('create-project','Admin\ProjectController@createProject')->name('admin.create.project');
Route::get('project/manage-project','Admin\ProjectController@manageProject')->name('admin.manage.project');
Route::get('create-task','Admin\ProjectController@createTask')->name('admin.create.task');
Route::get('project/manage-task','Admin\ProjectController@manageTask')->name('admin.manage.task');

// support routes
Route::get('create-ticket','Admin\SupportController@createTicket')->name('admin.create.ticket');
Route::get('manage-ticket','Admin\SupportController@manageTicket')->name('admin.manage.ticket');

// support routes
Route::get('proposal-report','Admin\ReportsController@proposalReport')->name('admin.report.proposal');
Route::get('estimate-report','Admin\ReportsController@estimateReport')->name('admin.report.estimate');
Route::get('estimate-invoice','Admin\ReportsController@invoiceReport')->name('admin.report.invoice');

// staff routes
Route::get('create-department','Admin\StaffController@createDepartment')->name('admin.create.department');
Route::get('manage-department','Admin\StaffController@manageDepartment')->name('admin.manage.department');
Route::get('create-staff','Admin\StaffController@createStaff')->name('admin.create.staff');
Route::get('manage-staff','Admin\StaffController@manageStaff')->name('admin.manage.staff');

// settings routes
Route::get('password','Admin\SettingsController@password')->name('admin.password');


Auth::routes(['register' => false]);
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
