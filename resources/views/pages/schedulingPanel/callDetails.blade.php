<x-default-layout>
   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <div class="d-flex flex-column flex-column-fluid">

         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
               <!--begin::Page title-->
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <!--begin::Title-->
                  @section('title')
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Details Board</h1>
                  @endsection
                  <!--end::Title-->
                  <!--begin::Breadcrumb-->
                  @section('breadcrumbs')
                  {{ Breadcrumbs::render('dashboard','jobSearch') }}
                  @endsection
                  <!--end::Breadcrumb-->
               </div>
               <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
         </div>
         <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <div id="kt_app_content_container" class="row g-xxl-9">
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <!--begin::Card header-->
                     <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Customer Details</h3>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--begin::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body">
                        <div class="mb-4 d-inline-block">
                           <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Contact Info</div>   
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }} for="name">First Name:</label>
                           <div class="col-lg-4">
                              @if($edit)
                              <input type="text" class="form-control" placeholder="First Name" id="name" name="name" value="Max">
                              @else
                              <span class="fw-semibold fs-6 text-muted">Max</span>
                              @endif
                              
                           </div>
                           <label class="col-lg-2 fw-bold text-gray-800" for="surname" {{ $edit ? 'style=padding:11px;' : '' }}>Last Name:</label>
                           <div class="col-lg-4 fv-row">
                              @if($edit)
                              <input type="text" class="form-control" placeholder="Last Name" id="surname" name="surname" value="Smith">
                              @else
                              <span class="fw-semibold fs-6 text-muted">Smith</span>
                              @endif
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="cell-phone" {{ $edit ? 'style=padding:11px;' : '' }}>Cell Phone:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Cell Phone" id="cell-phone" name="cell-phone" value="000 00 000">
                              @else
                              <span class="fw-bold fs-6 text-muted">000 00 000</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-semibold text-gray-800" for="alternate-phone" {{ $edit ? 'style=padding:11px;' : '' }}>Alternate Phone:</label>
                           <div class="col-lg-4 fv-row">
                              @if($edit)
                              <input type="text" class="form-control" placeholder="Alternate Phone" id="alternate-phone" name="alternate-phone" value="000 00 000">
                              @else
                              <span class="fw-bold fs-6 text-muted">000 00 000</span>
                              @endif
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="email" {{ $edit ? 'style=padding:11px;' : '' }}>Email:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="Max@email.com">
                              @else
                              <span class="fw-bold fs-6 text-muted">Max@email.com</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-semibold text-gray-800" for="phone-extn" {{ $edit ? 'style=padding:11px;' : '' }}>Alternate Phone Extn:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Alternate Phone Extn" id="phone-extn" name="phone-extn" value="">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6"></span>
                              @endif
                              
                           </div>
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="mb-4 d-inline-block">
                           <label class="fw-bold fs-6 text-gray-800 underscore-text-title">Address Details</label>   
                        </div>
                        <div class="row mb-4">
                           <label class="col-lg-2 fw-bold text-gray-800" for="address" {{ $edit ? 'style=padding:11px;' : '' }}>Address:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Address" id="address" name="address" value="Zabjelo 55 Podgorica">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">Zabjelo 55 Podgorica</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-bold text-gray-800" for="unit" {{ $edit ? 'style=padding:11px;' : '' }}>Unit:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Unit" id="unit" name="unit" value="">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6"></span>
                              @endif
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="city" {{ $edit ? 'style=padding:11px;' : '' }}>City:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="City:" id="city" name="city" value="Brampton">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">Brampton</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-bold text-gray-800" for="province" {{ $edit ? 'style=padding:11px;' : '' }}>Province:</label>
                           <div class="col-lg-4 fv-row">
                              @if($edit)
                              <input type="text" class="form-control" placeholder="Province" id="province" name="province" value="ON">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">ON</span>
                              @endif
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="postal-code" {{ $edit ? 'style=padding:11px;' : '' }}>Postal Code:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Postal Code:" id="postal-code" name="postal-code" value="L6R 3G4">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">L6R 3G4</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-bold text-gray-800" for="country" {{ $edit ? 'style=padding:11px;' : '' }}>Country:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Country:" id="country" name="country" value="Canada">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">Canada</span>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Job Identification</h3>
                        </div>
                     </div>
                     <div class="card-body row">
                        <div class="col-lg-12">
                           <div class="row mb-4 align-items-center">
                              <div class="col-lg-6 mb-4">
                                 <div class="fw-bold fs-6 text-gray-800 underscore-text-title d-inline-block">Job ID References</div>   
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="job_status"  {{ $edit ? 'style=padding:11px;' : '' }}>Current Job Status:</label>
                              <div class="col-lg-3">
                                 {{-- <span class="fw-bold fs-6 text-muted">062213993135</span> --}}
                                 <input type="text" class="form-control" placeholder="Current Job Status" id="job_status" name="job_status" value="062213993135">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" for="job_id" {{ $edit ? 'style=padding:11px;' : '' }}>Admin Panel Job ID:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="Admin Panel Job ID" id="job_id" name="job_id" value="w-12232">
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="hcp_invoice"  {{ $edit ? 'style=padding:11px;' : '' }}>HCP Invoice:</label>
                              <div class="col-lg-3">
                                 {{-- <span class="fw-bold fs-6 text-muted">062213993135</span> --}}
                                 <input type="text" class="form-control" placeholder="HCP Invoice" id="hcp_invoice" name="hcp_invoice" value="062213993135">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-semibold text-gray-800" for="warranty_reference_id"  {{ $edit ? 'style=padding:11px;' : '' }}>B2B/ Warranty Reference ID:</label>
                              <div class="col-lg-3">
                                 {{-- <span class="fw-bold fs-6 text-muted">062213993135</span> --}}
                                 <input type="text" class="form-control" placeholder="B2B/ Warranty Reference ID" id="warranty_reference_id" name="warranty_reference_id" value="062213993135">
                              </div>
                              <label class="col-lg-3 fw-semibold text-gray-800" for="source"  {{ $edit ? 'style=padding:11px;' : '' }}>Source (B2C, B2B, Warranty):</label>
                              <div class="col-lg-3">
                                 {{-- <span class="fw-bold fs-6 text-muted">Warranty</span> --}}
                                 <input type="text" class="form-control" placeholder="Source (B2C, B2B, Warranty)" id="source" name="source" value="Warranty">
                              </div>
                           </div>
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="col-lg-12">
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Company Details</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" for="company_name" {{ $edit ? 'style=padding:11px;' : '' }}>Company Name:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="Company Name" id="company_name" name="company_name" value="SQUARETRADE">
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="ap_phone" {{ $edit ? 'style=padding:11px;' : '' }}>AP Phone:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="AP Phone" id="ap_phone" name="ap_phone" value="1-857-254-1169">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" for="poc_phone" {{ $edit ? 'style=padding:11px;' : '' }}>POC Phone:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="POC Phone" id="poc_phone" name="poc_phone" value="062213993135">
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="ap_phone_extn" {{ $edit ? 'style=padding:11px;' : '' }}>AP Phone Extn:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="AP Phone Extn" id="ap_phone_extn" name="ap_phone_extn" value="">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" for="poc_phone_extn" {{ $edit ? 'style=padding:11px;' : '' }}>POC Phone Extn:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="POC Phone Extn" id="poc_phone_extn" name="poc_phone_extn" value="2">
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="company_ap_email" {{ $edit ? 'style=padding:11px;' : '' }}>Company AP Email:</label>
                              <div class="col-lg-3">
                                 <input type="email" class="form-control" placeholder="Company AP Email" id="company_ap_email" name="company_ap_email" value="tech_compliance@squaretrade.com">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" for="company_poc_email" {{ $edit ? 'style=padding:11px;' : '' }}>Company POC Email:</label>
                              <div class="col-lg-3">
                                 <input type="email" class="form-control" placeholder="Company AP Email" id="company_poc_email" name="company_poc_email" value="appliance_team@squaretrade.com">
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="company_desired_markup_invoices" {{ $edit ? 'style=padding:11px;' : '' }}>Company Desired  Markup for invoices (Pre-Set in Settings):</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" placeholder="Company Desired  Markup for invoices" id="company_desired_markup_invoices" name="company_desired_markup_invoices" value="0%">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-12">
                  <div class="card mb-xl-10" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Job Details</h3>
                        </div>
                     </div>
                     <div class="card-body row">
                        <div class="col-lg-6 border-end">
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Job Categorization</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-semibold text-gray-800" for="job-type" {{ $edit ? 'style=padding:11px;' : '' }}>Type of Job:</label>
                              <div class="col-lg-3">
                                  @if($edit)
                                 <select name="job-type" id="job-type" data-control="select2" data-placeholder="Select job type..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1" data-kt-initialized="1">
                                    <option>Appliance</option>
                                    <option value="1">Grace Green</option>
                                    <option value="2">Nick LOgan</option>
                                    <option value="3">Carles Nilson</option>
                                    <option value="4">Alice Danchik</option>
                                    <option value="5">Harris Bold</option>
                                    <option value="6">Carles Nilson</option>
                                </select>
                                 @else
                                 <span class="fw-bold fs-6 text-muted">Appliance</span>
                                 @endif
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" for="type-of-product" {{ $edit ? 'style=padding:11px;' : '' }}>Type of Product:</label>
                              <div class="col-lg-3 fv-row">
                              @if($edit)
                                 <input type="text" class="form-control" placeholder="Type of Product:" id="type-of-product" name="type-of-product">
                                 @else
                                 <span class="fw-bold fs-6 text-muted">Range - Gas</span>
                                 @endif
                              </div>
                           </div>
                           <div class="separator separator-dashed mb-9"></div>
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Additional Specifics For Appliances only</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-semibold text-gray-800" for="fuel-type" {{ $edit ? 'style=padding:11px;' : '' }}>Fuel Type:</label>
                              <div class="col-lg-3">
                              @if($edit)
                                 <select name="fuel-type" id="fuel-type" data-control="select2" data-placeholder="Select fuel type..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1" data-kt-initialized="1">
                                    <option>Gas</option>
                                    <option value="1">Grace Green</option>
                                    <option value="2">Nick LOgan</option>
                                    <option value="3">Carles Nilson</option>
                                    <option value="1">Alice Danchik</option>
                                    <option value="2">Harris Bold</option>
                                    <option value="3">Carles Nilson</option>
                                </select>
                                 @else
                                 <span class="fw-bold fs-6 text-muted">Gas</span>
                                 @endif
                              </div>
                              <label class="col-lg-3 fw-semibold text-gray-800" for="model-number" {{ $edit ? 'style=padding:11px;' : '' }}>Model Number:</label>
                              <div class="col-lg-3 fv-row">
                              @if($edit)
                                 <input type="text" class="form-control" placeholder="Model Number" id="model-number" name="model-number" value="EFMC627UTT">
                                 @else
                                 <span class="fw-semibold text-gray-800 fs-6">EFMC627UTT</span>
                                 @endif
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-semibold text-gray-800" for="stacked-unit" {{ $edit ? 'style=padding:11px;' : '' }}>Stacked unit:</label>
                              <div class="col-lg-3">
                              @if($edit)
                                 <select name="stacked-unit" id="stacked-unit" data-control="select2" data-placeholder="Select stacked unit..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1" data-kt-initialized="1">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                                 @else
                                 <span class="fw-bold fs-6 text-muted">No</span>
                                 @endif
                              </div>
                              <label class="col-lg-3 fw-semibold text-gray-800" for="serial-number" {{ $edit ? 'style=padding:11px;' : '' }}>Serial Number:</label>
                              <div class="col-lg-3 fv-row">
                              @if($edit)
                                 <input type="text" class="form-control" placeholder="Serial Number:" id="serial-number" name="serial-number" value="N/a">
                                 @else
                                 <span class="fw-semibold text-gray-800 fs-6">N/a</span>
                                 @endif
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-semibold text-gray-800" for="brand" {{ $edit ? 'style=padding:11px;' : '' }}>Brand:</label>
                              <div class="col-lg-3">
                              @if($edit)
                                 <select name="brand" id="brand" data-control="select2" data-placeholder="Select brand..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1" data-kt-initialized="1">
                                    <option>Electrolux</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                                 @else
                                 <span class="fw-bold fs-6 text-muted">Electrolux</span>
                                 @endif
                              </div>
                              <!--end::Col-->
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Urgency Level:</label>
                              <div class="col-lg-4 fv-row">
                                 @if($edit)
                                 <select name="urgency-level" data-control="select2" data-hide-search="true" data-placeholder="Select urgency level..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                    <option value="">Select urgency level...</option>
                                    <option value="1">CRM</option>
                                    <option value="2">Project Alice</option>
                                    <option value="3">Keenthemes</option>
                                    <option value="4">General</option>
                                </select>
                                 @else
                                 <span class="fw-bold fs-6 text-muted">Select</span>
                                 @endif
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class=" fw-semibold text-gray-800" for="problem-description" {{ $edit ? 'style=padding:11px;' : '' }}>Problem Description:</label>
                              <div class=" fv-row">
                                 @if($edit)
                                 <textarea type="text" class="form-control" placeholder="Problem Description:" id="problem-description" name="problem-description">Range won't heat properly, the burner is barely heating up</textarea>
                                 @else
                                 <span class="fw-semibold text-gray-800 fs-6">Range won't heat properly, the burner is barely heating up.</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0 ">Service Type and Price</h3>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mb-4 d-inline-block">
                           <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Service Type and Price</div>   
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="service-type" {{ $edit ? 'style=padding:11px;' : '' }}>Service Type:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <select name="service-type" id="service-type" data-control="select2" data-placeholder="Service Type..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                                 <option>Diagnostic Truck Roll</option>
                                 <option value="1">Yes</option>
                                 <option value="2">No</option>
                             </select>
                              @else
                              <span class="fw-bold fs-6 text-muted">Diagnostic Truck Roll</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-semibold text-gray-800" for="hst-vendor-price" {{ $edit ? 'style=padding:11px;' : '' }}>Pre-HST Vendor Price:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Pre-HST Vendor Price:" id="hst-vendor-price" name="hst-vendor-price" value="140.00">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">140.00</span>
                              @endif
                           </div>
                        </div>
                        <div class="mb-4 d-inline-block">
                           <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Additional Specifics For Appliances only</div>   
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-semibold text-gray-800" for="total-diagnostic-fees" {{ $edit ? 'style=padding:11px;' : '' }}>Total Diagnostic Fees:</label>
                           <div class="col-lg-4">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Total Diagnostic Fees:" id="total-diagnostic-fees" name="total-diagnostic-fees" value="140.00">
                              @else
                              <span class="fw-bold fs-6 text-muted">140.00</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-bold text-gray-800" for="total-labour" {{ $edit ? 'style=padding:11px;' : '' }}>Total Labour:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Total Labour:" id="total-labour" name="total-labour" value="0">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">0</span>
                              @endif
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-bold text-gray-800" for="total-parts" {{ $edit ? 'style=padding:11px;' : '' }}>Total Parts:</label>
                           <div class="col-lg-4">
                              @if($edit)
                              <input type="text" class="form-control" placeholder="Total Parts:" id="total-parts" name="total-parts" value="0">
                              @else
                              <span class="fw-bold fs-6 text-muted">0</span>
                              @endif
                           </div>
                           <label class="col-lg-2 fw-semibold text-gray-800" for="parts-freight-cost" {{ $edit ? 'style=padding:11px;' : '' }}>Parts Freight Cost:</label>
                           <div class="col-lg-4 fv-row">
                           @if($edit)
                              <input type="text" class="form-control" placeholder="Parts Freight Cost" id="parts-freight-cost" name="parts-freight-cost" value="0">
                              @else
                              <span class="fw-semibold text-gray-800 fs-6">0</span>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Schedule</h3>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-semibold text-gray-800" for="schedule_date">Schedule Date:</label>
                           <div class="position-relative d-flex align-items-center col-lg-4">
                              <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                              <input class="form-control form-control-solid ps-12 flatpickr-input" value="2024/01/19" placeholder="Select schedule date" name="schedule_date" id="schedule_date" type="text" readonly="readonly">
                           </div>
                           <label class="col-lg-2 fw-semibold text-gray-800" for="schedule_period">Schedule Period:</label>
                           {{-- <div class="col-lg-4 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">8:00 - 12:00</span>
                           </div> --}}
                           <div class="position-relative d-flex align-items-center col-lg-4">
                              <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                              <input class="form-control form-control-solid ps-12 flatpickr-input time" value="" placeholder="Select schedule period" name="schedule_period" id="schedule_period" type="text" readonly="readonly">
                           </div>
                        </div>
                        @if(!$edit)
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-2 fw-semibold text-gray-800" for="assigned_tech" {{ $edit ? 'style=padding:11px;' : '' }}>Assigned Tech:</label>
                           <div class="col-lg-4">
                              <input type="text" class="form-control" placeholder="Assigned Tech:" id="assigned_tech" name="assigned_tech">
                           </div>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container">
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Job Stages Board</h1>
               </div>
            </div>
         </div>
         <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="row g-xxl-9">
               <div class="col-xxl-12">
                  <div class="card mb-xl-10" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h3 class="fw-bold m-0">Job Stages</h3>
                        </div>
                     </div>
                     <div class="card-body row">
                        <div class="col-lg-3 border-end">
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Primary Stage Information</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-bold text-gray-800" for="days_to_appointment" {{ $edit ? 'style=padding:11px;' : '' }}>Days to The Appointment:</label>
                              <div class="col-lg-6">
                                 <select name="days_to_appointment" id="days_to_appointment" data-control="select2" data-hide-search="true" data-placeholder="Select days to appointment..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                    <option value="">Select days to appointment...</option>
                                    <option value="1">Zip Code Not Covered</option>
                                    <option value="2">Brand Not Covered</option>
                                </select>
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-semibold text-gray-800" for="current_job_stage">Current Job Stage:</label>
                              <div class="col-lg-6">
                                 <input type="text" class="form-control" placeholder="Current Job Stage" id="current_job_stage" name="current_job_stage" value="Job Rejected">
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-bold text-gray-800" for="" {{ $edit ? 'style=padding:11px;' : '' }}>Next Job Stage:</label>
                              <div class="col-lg-6">
                                 <span class="fw-bold fs-6 text-muted">-</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 border-end">
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Links</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-semibold text-gray-800" for="">HCP Job Link:</label>
                              <div class="col-lg-6 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">Not scheduled yet</span>
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-semibold text-gray-800" for="">Job Report Link:</label>
                              <div class="col-lg-6 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">Not scheduled yet</span>
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-6 fw-semibold text-gray-800" for="">Job Claim/ Batch Link:</label>
                              <div class="col-lg-6 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">Not submitted yet</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-4 d-inline-block">
                              <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Additional Stage System Information</div>   
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>First Stage - Job Accepted:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Second Stage - Scheduled On HCP:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Third Stage - Job Report Submitted:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Forth Stage - Job Report Passed Audit:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                           </div>
                           <div class="row mb-4 align-items-center">
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Fifth Stage - Claim/ Batch Submitted:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                              <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Sixth Stage - Claim/ Batch Paid:</label>
                              <div class="col-lg-3 fv-row">
                                 <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container">
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Actions Board</h1>
               </div>
            </div>
         </div>
         <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="row g-xxl-9">
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0">Job Acceptance</h5>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <div class="card-body">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for="job_rejection_reason" {{ $edit ? 'style=padding:11px;' : '' }}>Job Rejection Reason:</label>
                           <div class="col-lg-5">
                              {{-- <span class="fw-bold fs-6 text-muted">Unable To Contact Customer</span> --}}
                              <select name="job_rejection_reason" id="job_rejection_reason" data-control="select2" data-hide-search="true" data-placeholder="Select job rejection reason..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                 <option value="">Select urgency level...</option>
                                 <option value="1">Zip Code Not Covered</option>
                                 <option value="2">Brand Not Covered</option>
                                 <option value="3">Product Not Covered</option>
                                 <option value="4">Customer Refuses Service</option>
                                 <option value="5">Unable To Contact Customer</option>
                                 <option value="6">Overbooked/ Understaffed</option>
                                 <option value="7">Technician Not Available</option>
                                 <option value="8">Price Inaccuracy</option>
                             </select>
                           </div>
                        </div>
                        <div class="row justify-content-center mt-14">
                           <button type="button" class="btn btn-danger me-4 col-lg-auto">
                              Reject Job
                           </button>
                           <button type="button" class="btn btn-success col-lg-auto">
                              Accept Job
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0">Reschedule inquiry</h5>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for="new_schedule_date" {{ $edit ? 'style=padding:11px;' : '' }}>New Schedule Date:</label>
                           <div class="position-relative d-flex align-items-center col-lg-3">
                              <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                              <input class="form-control form-control-solid ps-12 flatpickr-input" value="2024/01/19" placeholder="Select schedule date" name="new_schedule_date" id="new_schedule_date" type="text" readonly="readonly">
                           </div>
                           <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>New Schedule Period:</label>
                           <div class="col-lg-3 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">8:00 - 12:00</span>
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for="reschedule_reason" {{ $edit ? 'style=padding:11px;' : '' }}>Reschedule Reason:</label>
                           <div class="col-lg-3">
                              {{-- <span class="fw-bold fs-6 text-muted">Select</span> --}}
                              <select name="reschedule_reason" id="reschedule_reason" data-control="select2" data-hide-search="true" data-placeholder="Select reschedule reason..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                 <option value="">Select reschedule reason...</option>
                                 <option value="1">CRM</option>
                                 <option value="2">Project Alice</option>
                                 <option value="3">Keenthemes</option>
                                 <option value="4">General</option>
                             </select>
                           </div>
                           <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Extra Stage - Reschedule Inquiry:</label>
                           <div class="col-lg-3 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                           </div>
                           <!--end::Col-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0">HCP Scheduling</h5>
                        </div>
                     </div>
                     <div class="card-body p-10">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for='assigned_tech' {{ $edit ? 'style=padding:11px;' : '' }}>Assigned Tech:</label>
                           <div class="col-lg-5">
                              <select name="assigned_tech" id="assigned_tech" data-control="select2" data-hide-search="true" data-placeholder="Select assigned tech..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                 <option value="">Select assigned tech...</option>
                                 <option value="1">Zip Code Not Covered</option>
                                 <option value="2">Brand Not Covered</option>>
                                 <option value="8">Price Inaccuracy</option>
                             </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0">Cancellation Inquiry</h5>
                        </div>
                     </div>
                     <div class="card-body p-10">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for="cancellation_reason" {{ $edit ? 'style=padding:11px;' : '' }}>Cancellation Reason:</label>
                           <div class="col-lg-5">
                              <select name="cancellation_reason" id="cancellation_reason" data-control="select2" data-hide-search="true" data-placeholder="Select job rejection reason..." class="form-select form-select-solid select2-box" data-minimum-results-for-search="Infinity" tabindex="-1"  data-kt-initialized="1">
                                 <option value="">Select urgency level...</option>
                                 <option value="1">Zip Code Not Covered</option>
                                 <option value="2">Brand Not Covered</option>
                                 <option value="3">Product Not Covered</option>
                                 <option value="4">Customer Refuses Service</option>
                             </select>
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800">Extra Stage - Cancellation Inquiry:</label>
                           <div class="col-lg-5">
                              <span class="fw-bold fs-6 text-muted">FALSE</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0">Related Jobs</h5>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Previous Related Job: </label>
                           <div class="col-lg-4">
                              <span class="fw-bold fs-6 text-muted">-</span>
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800" for="current_job" {{ $edit ? 'style=padding:11px;' : '' }}>Current Job:</label>
                           <div class="col-lg-4">
                              <input type="text" class="form-control" placeholder="Admin Panel Job ID" id="current_job" name="current_job" value="w-121212">
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Next Related Job:</label>
                           <div class="col-lg-4">
                              <span class="fw-bold fs-6 text-muted">-</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6">
                  <div class="card mb-xl-10 h-md-100" id="kt_profile_details_view">
                     <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                           <h5 class="fw-bold m-0 text-gray-800">Request Job Authorization</h5>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mb-4 d-inline-block">
                           <div class="fw-bold fs-6 text-gray-800 underscore-text-title">Request Job Authorization</div>   
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Profile Link:</label>
                           <div class="col-lg-3">
                              <span class="fw-bold fs-6 text-muted">-</span>
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-semibold text-gray-800">Does Next Related Job Exist?</label>
                           <div class="col-lg-3">
                              <span class="fw-bold fs-6 text-muted">FALSE</span>
                           </div>
                           <label class="col-lg-3 fw-semibold text-gray-800">Job Report Passed Audit:</label>
                           <div class="col-lg-3 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                           </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                           <label class="col-lg-3 fw-bold text-gray-800" for="important_note" {{ $edit ? 'style=padding:11px;' : '' }}>Important Note **</label>
                           <div class="col-lg-9">
                              <textarea type="text" class="form-control" rows="3" id="important_note" placeholder="Important Note:" name="important_note">Only one approved "Job Authorization Request" is allowed per job. Upon approval, it will appear on the "Next Related Job" and will be facilitated on the "In Progress Jobs" section.</textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end::Content wrapper-->
   </div>
   <!--end:::Main-->
</x-default-layout>