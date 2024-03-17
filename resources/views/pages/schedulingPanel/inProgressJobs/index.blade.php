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
                                        New Job Inquiries
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
								
									<!--begin::Tables Widget 13-->
									<div class="card mb-6 mb-xl-10">
										
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<a href="pages/careers/apply.html" class="btn btn-sm btn-primary mt-5">Accept Selected Jobs</a>
												<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
																</div>
															</th>
															<th class="min-w-150px">Urgency Level</th>
															<th class="min-w-140px">Admin Panel Job ID</th>
															<th class="min-w-120px">HCP invoice</th>
															<th class="min-w-120px">B2B/ Warranty Reference ID</th>
															<th class="min-w-120px">Source (B2C, B2B, Warranty)</th>
															<th class="min-w-120px">Company name</th>
                                                            <th class="min-w-120px">Customer name</th>
                                                            <th class="min-w-120px">Phone number</th>
                                                            <th class="min-w-120px">Job Postal Code</th>
                                                            <th class="min-w-120px">Appointment Time window </th>
                                                            <th class="min-w-120px">Days to The Appointment</th>
                                                            <th class="min-w-120px">Current Job Stage</th>
                                                            <th class="min-w-120px">Next Job Stage</th>
                                                            <th class="min-w-120px">Type of Job (Appliance/ Other)</th>
                                                            <th class="min-w-120px">Type of Product</th>
                                                            <th class="min-w-120px">Problem Description</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<span class="badge badge-light-success">Approved</span>
															</td>
															<td>
																<a href="{{route('call.details', ['edit' => 'true'])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">w-121212</a>
															</td>
															<td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Codee</span>
															</td>
															<td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
															</td>
															<td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
															</td>
															<td class="text-gray-900 fw-bold text-hover-primary fs-6">$3560</td>
															
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
															</td>
                                                            <td>
																<span class="badge badge-light-success">Approved</span>
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
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
				
					</div>
					<!--end:::Main-->
  
</x-default-layout>