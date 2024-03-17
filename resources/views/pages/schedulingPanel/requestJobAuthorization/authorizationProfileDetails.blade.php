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
                  Request Job Authorization Profile details
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
                        <label class="col-lg-2 fw-bold text-gray-800">First Name:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-semibold fs-6 text-muted">Max</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Last Name:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                           <span class="fw-semibold fs-6 text-muted ">Smith</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Cell Phone:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">000 00 000</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800">Alternate Phone:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6"></span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Email:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">Max@email.com</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-3 fw-semibold text-gray-800">Alternate Phone Extn:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-3 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6"></span>
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
                        <label class="col-lg-2 fw-semibold text-gray-800">Address:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">Zabjelo 55 Podgorica</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Unit:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6"></span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">City:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">Brampton</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Province:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">ON</span>
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Row-->
                     <div class="row mb-4">
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Postal Code:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                           <span class="fw-bold fs-6 text-muted">L6R 3G4</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Label-->
                        <label class="col-lg-2 fw-semibold text-gray-800">Country:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row">
                           <span class="fw-semibold text-gray-800 fs-6">Canada</span>
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
                        <label class="col-lg-3 fw-semibold text-gray-800">Job ID References:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted"></span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">Current Job Status:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Rejected</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">Admin Panel Job ID:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">w-12232</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">HCP Invoice:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">062213993135</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">B2B/ Warranty Reference ID:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">062213993135</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">Source (B2C, B2B, Warranty):</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">Warranty</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-12 fw-bold fs-6 text-gray-800 underscore-text-title">Company Details</label>   
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">Company Name:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">SQUARETRADE</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">AP Phone:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">1-857-254-1169</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">POC Phone:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">1-877-387-8129</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">AP Phone Extn:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted"></span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">POC Phone Extn:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">2</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">Company AP Email:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">tech_compliance@squaretrade.com</span>
                        </div>
                     </div>
                     <div class="row mb-4">
                        <label class="col-lg-3 fw-semibold text-gray-800">Company POC Email:</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">appliance_team@squaretrade.com</span>
                        </div>
                        <label class="col-lg-3 fw-semibold text-gray-800">Company Desired  Markup for invoices (Pre-Set in Settings):</label>
                        <div class="col-lg-3">
                           <span class="fw-bold fs-6 text-muted">0%</span>
                        </div>
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <!--end::Content container-->
                           <!--begin::Tables Widget 13-->
                           <div class="card mb-5 mb-xl-8"  id="searchResultsTable">
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                   <!--begin::Table head-->
									<thead>
										<tr class="fw-bold text-muted">
											<th class="min-w-140px">Request Job Authorization ID</th>
											<th class="min-w-120px">HCP invoice</th>
											<th class="min-w-120px">B2B/ Warranty Reference ID</th>
											<th class="min-w-120px">Source (B2C, B2B, Warranty)</th>
											<th class="min-w-120px">Company name</th>
											<th class="min-w-120px">Customer name</th>
											<th class="min-w-120px">Phone number</th>
											<th class="min-w-120px">Job Postal Code</th>
											<th class="min-w-120px">Type of Job (Appliance/ Other) </th>
											<th class="min-w-120px">Type of Product</th>
											<th class="min-w-120px">Problem Description</th>
										</tr>
									</thead>
									<!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr>
                                    <td>
																<a href="{{route('authorization.profile.details')}}" class="text-gray-900 fw-bold text-hover-primary fs-6">rjap-12195-1</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">16512</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">26820</a>
															</td>
															<td class="text-gray-900 fw-bold text-hover-primary fs-6">B2B</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Royal York PM</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Abisoye Ashafa</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">(416) 450-2062</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">L6H 0J1</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Appliance</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Washing Machine</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Not Draining</span>
															</td>
															
														</tr>
														<tr>
                                                        <td>
																<a href="{{route('authorization.profile.details')}}" class="text-gray-900 fw-bold text-hover-primary fs-6">rjap-12195-1</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">16511</a>
															</td>
															<td>
																<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">26820</a>
															</td>
															<td class="text-gray-900 fw-bold text-hover-primary fs-6">B2B</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Royal York PM</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Abisoye Ashafa</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">(416) 450-2062</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">L6H 0J1</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Appliance</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Washing Machine</span>
															</td>
                                                            <td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Not Draining</span>
															</td>
															
														</tr>
													</tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 13-->
        </div>
        <!--end::Content wrapper-->
         </div>
 
      </div>
   </div>
   <!--end::Content wrapper-->
   </div>
   <!--end:::Main-->
</x-default-layout>