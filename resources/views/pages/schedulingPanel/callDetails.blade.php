<x-default-layout>
   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <!--begin::Content wrapper-->
      <div class="d-flex flex-column flex-column-fluid">
         <!--begin::Toolbar-->
         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
               <!--begin::Page title-->
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <!--begin::Title-->
                  @section('title')
                  Details Board
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
         <!--end::Toolbar-->
         <!--begin::Content-->
         <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="row gy-5 g-xl-10">
               <!--begin::details View-->
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Customer Details</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Contact Info</label>   
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>First Name:</label>


                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           @if($edit)
                           <input type="text" class="form-control" placeholder="First Name" name="name">
                           @else
                           <span class="fw-semibold fs-6 text-muted">Max</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Last Name:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Last Name" name="surname">
                           @else
                           <span class="fw-semibold fs-6 text-muted">Smith</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Cell Phone:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Cell Phone" name="cell-phone">
                           @else
                           <span class="fw-bold fs-6 text-muted">000 00 000</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Alternate Phone:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Alternate Phone:" name="alternate-phone">
                           @else
                           <span class="fw-bold fs-6 text-muted">000 00 000</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Email:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Email:" name="email">
                           @else
                           <span class="fw-bold fs-6 text-muted">Max@email.com</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Alternate Phone Extn:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Alternate Phone Extn:" name="phone-extn">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6"></span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Address Details</label>   
                     </div>
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Address:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Address:" name="address">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">Zabjelo 55 Podgorica</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Unit:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Unit:" name="unit">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6"></span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>City:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="City:" name="city">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">Brampton</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Province:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                                 @if($edit)
                           <input type="text" class="form-control" placeholder="Province:" name="province">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">ON</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Postal Code:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Postal Code:" name="postal-code">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">L6R 3G4</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Country:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Country:" name="country">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">Canada</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::details View-->
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Job Identification</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Job ID References:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted"></span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Current Job Status:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Rejected</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Admin Panel Job ID:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">w-12232</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>HCP Invoice:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">062213993135</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>B2B/ Warranty Reference ID:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">062213993135</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Source (B2C, B2B, Warranty):</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Warranty</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Company Details</label>   
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Company Name:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">SQUARETRADE</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>AP Phone:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">1-857-254-1169</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>POC Phone:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">1-877-387-8129</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>AP Phone Extn:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted"></span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>POC Phone Extn:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">2</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Company AP Email:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">tech_compliance@squaretrade.com</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Company POC Email:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">appliance_team@squaretrade.com</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Company Desired  Markup for invoices (Pre-Set in Settings):</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">0%</span>
                        </div>
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
               <!--begin::details View-->
               <div class="card col-xl-12 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Job Details</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-2 fw-bold fs-6 text-gray-800 underscore-text-title">Job Categorization</label>   
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Type of Job:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                            @if($edit)
                            <select class="form-select" aria-label="Select example">
                              <option>Appliance</option>
                              <option value="1">Grace Green</option>
                              <option value="2">Nick LOgan</option>
                              <option value="3">Carles Nilson</option>
                              <option value="1">Alice Danchik</option>
                              <option value="2">Harris Bold</option>
                              <option value="3">Carles Nilson</option>
                           </select>
                           @else
                           <span class="fw-bold fs-6 text-muted">Appliance</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Type of Product:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Type of Product:" name="type-of-product">
                           @else
                           <span class="fw-bold fs-6 text-muted">Range - Gas</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Urgency Level:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                        @if($edit)
                            <select class="form-select" name="urgency-level" aria-label="Select example">
                              <option>Urgent</option>
                              <option value="1">Grace Green</option>
                              <option value="2">Nick LOgan</option>
                              <option value="3">Carles Nilson</option>
                              <option value="1">Alice Danchik</option>
                              <option value="2">Harris Bold</option>
                              <option value="3">Carles Nilson</option>
                           </select>
                           @else
                           <span class="fw-bold fs-6 text-muted">Select</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-bold fs-6 text-gray-800 underscore-text-title">Additional Specifics For Appliances only</label>   
                     </div>
                     <div class="row mb-3">
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Fuel Type:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                        @if($edit)
                            <select class="form-select" name="fuel-type" aria-label="Select example">
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
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Model Number:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Model Number:" name="model-number">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">EFMC627UTT</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Problem Description:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                        @if($edit)
                           <input type="textarea" class="form-control" placeholder="Problem Description:" name="problem-description">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">Range won't heat properly, the burner is barely heating up.</span>
                           @endif
                           
                        </div>
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-3">
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Stacked unit:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                        @if($edit)
                            <select class="form-select" name="stacked-unit" aria-label="Stacked uni">
                              <option>No</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                           </select>
                           @else
                           <span class="fw-bold fs-6 text-muted">No</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Serial Number:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Serial Number:" name="serial-number">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">N/a</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Brand:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                        @if($edit)
                            <select class="form-select" name="stacked-unit" aria-label="Stacked uni">
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
                     <!--end::Row-->
                  </div>
                  \
                  <!--end::Card body-->
               </div>
               <!--end::details View-->
               <!--begin::details View-->
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0 ">Service Type and Price</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Service Type and Price</label>   
                     </div>
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Service Type:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                            <select class="form-select" name="service-type" aria-label="Service Type">
                              <option>Diagnostic Truck Roll</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                           </select>
                           @else
                           <span class="fw-bold fs-6 text-muted">Diagnostic Truck Roll</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Pre-HST Vendor Price:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Pre-HST Vendor Price:" name="hst-vendor-price">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">140.00</span>
                           @endif
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Additional Specifics For Appliances only</label>   
                     </div>
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Total Diagnostic Fees:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Total Diagnostic Fees:" name="total-diagnostic-fees">
                           @else
                           <span class="fw-bold fs-6 text-muted">140.00</span>
                           @endif
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Total Labour:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Total Labour:" name="total-labour">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">0</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Total Parts:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Total Parts:" name="total-parts">
                           @else
                           <span class="fw-bold fs-6 text-muted">0</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Parts Freight Cost:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                        @if($edit)
                           <input type="text" class="form-control" placeholder="Parts Freight Cost:" name="parts-freight-cost">
                           @else
                           <span class="fw-semibold text-gray-800 fs-6">0</span>
                           @endif
                           
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
               </div>
               <!--end::details View-->
               <!--begin::details View-->
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Schedule</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  >Schedule Date:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">01/19/2024</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800">Schedule Period:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">8:00 - 12:00</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     @if(!$edit)
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Assigned Tech:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted"></span>
                        </div>
                        <!--end::Col-->
                     </div>
                     @endif
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::details View-->
            </div>
            <!--end::Content container-->
         </div>
         <!--end::Content-->
         <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container">
               <!--begin::Page title-->
               <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <!--begin::Title-->
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Job Stages Board</h1>
                  <!--end::Title-->
               </div>
               <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
         </div>
         <!--begin::Content-->
         <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="row gy-5 g-xl-10">
               <!--begin::details View-->
               <div class="card col-xl-12 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Job Stages</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-bold fs-6 text-gray-800 underscore-text-title">Primary Stage Information</label>   
                        <label class="col-lg-3 fw-bold fs-6 text-gray-800 underscore-text-title">Links</label>   
                        <label class="col-lg-6 fw-bold fs-6 text-gray-800 underscore-text-title">Additional Stage System Information</label> 
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Days to The Appointment:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1">
                           <span class="fw-bold fs-6 text-muted">selectbox</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800">HCP Job Link:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">Not scheduled yet</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>First Stage - Job Accepted:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Second Stage - Scheduled On HCP:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800">Current Job Stage:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                           <span class="fw-bold fs-6 text-muted">Job Rejected</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800">Job Report Link:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">Not scheduled yet</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Third Stage - Job Report Submitted:
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Forth Stage - Job Report Passed Audit:
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Next Job Stage:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1">
                           <span class="fw-bold fs-6 text-muted">-</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-1 fw-semibold text-gray-800">Job Claim/ Batch Link:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">Not submitted yet</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Fifth Stage - Claim/ Batch Submitted:
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Sixth Stage - Claim/ Batch Paid:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-1 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
               </div>
               <!--end::details View-->
               <!--end::Content-->
               <div id="kt_app_toolbar" class="app-toolbar">
                  <!--begin::Toolbar container-->
                  <div id="kt_app_toolbar_container" class="app-container">
                     <!--begin::Page title-->
                     <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Actions Board</h1>
                        <!--end::Title-->
                     </div>
                     <!--end::Page title-->
                  </div>
                  <!--end::Toolbar container-->
               </div>
               <!--begin::Content-->
               <!--begin::details View-->
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Job Acceptance</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Job Rejection Reason:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-9">
                           <span class="fw-bold fs-6 text-muted">Unable To Contact Customer</span>
                        </div>
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Reschedule inquiry</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>New Schedule Date:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">01/19/2024</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>New Schedule Period:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">Smith</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Reschedule Reason:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Select</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Extra Stage - Reschedule Inquiry:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">HCP Scheduling</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Assigned Tech:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">Select</span>
                        </div>
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Cancellation Inquiry</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Cancellation Reason:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Select</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-5 fw-semibold text-gray-800">Extra Stage - Cancellation Inquiry:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0">Related Jobs</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Previous Related Job: </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">-</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Current Job:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">w-121212</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800"  {{ $edit ? 'style=padding:11px;' : '' }}>Next Related Job:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">-</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card col-xl-6 mb-xl-10" id="kt_profile_details_view">
                  <!--begin::Card header-->
                  <div class="card-header cursor-pointer">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                        <h5 class="fw-bold m-0 text-gray-800">Request Job Authorization</h5>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--begin::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body p-10">
                     <!--begin::Card header-->
                     <!--begin::Card header-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Request Job Authorization</label>   
                     </div>
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>Profile Link:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">-</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-gray-800">Does Next Related Job Exist?</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2">
                           <span class="fw-bold fs-6 text-muted">FALSE</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-gray-800">Job Report Passed Audit:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-2 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">FALSE</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-bold text-gray-800" {{ $edit ? 'style=padding:11px;' : '' }}>** Important Note:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-10">
                           <span class="fw-bold fs-6 text-muted">Only one approved "Job Authorization Request" is allowed per job. Upon approval, it will appear on the "Next Related Job" and will be facilitated on the "In Progress Jobs" section.
                           </span>
                        </div>
                        <!--end::Col-->
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::details View-->
            </div>
            <!--end::Content container-->
         </div>
         <!--end::Content-->
      </div>
   </div>
   <!--end::Content wrapper-->
   </div>
   <!--end:::Main-->
</x-default-layout>