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
<<<<<<< HEAD
											<div class="table-responsive">
												<!--begin::Table-->
										
												<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
																</div>
															</th>
															<th class="min-w-150px"><span class='badge fw-bold fs-6'>Urgency Level</span></th>
											<th class="min-w-140px"><span class='badge fw-bold fs-6'>Admin Panel Job ID</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>HCP invoice	</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>B2B/ Warranty Reference ID</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Source (B2C, B2B, Warranty) </span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Company name</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Customer name </span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Phone number </span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Job Postal Code</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Appointment Time window</span> </th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Days to The Appointment</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Current Job Stage</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Next Job Stage</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Type of Job (Appliance/ Other)</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Type of Product</span></th>
											<th class="min-w-120px"><span class='badge fw-bold fs-6'>Problem Description</span></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														@foreach($jobs as $job)
														@php
														$customer = json_decode($job->customer);
														$address = json_decode($job->address);
														$schedule = json_decode($job->schedule);
														@endphp
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-13-check" type="checkbox" value="{{$job->id}}" />
																</div>
															</td>
															<td>
																<span class="badge badge-light-success"></span>
															</td>
															<td>
															<span class="badge"><a href="{{route('call.details',['edit'=>'false','key'=>'new-job','jobId'=>$job->id])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">w-{{$job->id}}</a>
</span>
															</td>
															<td>
																<span class="badge">{{$job->invoice_number}}</span>
															</td>
															<td>
																<span class="badge">Paid</span>
															</td>
															<td>
																<span class="badge">Web, UI/UX Design</span>
															</td>
															<td>
															<span class="badge">{{$job->company_name}}</span>
														</td>
															
                                                            <td>
																<span class="badge">{{$customer->last_name . ' '. $customer->first_name}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$address->zip}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$customer->mobile_number}}</span>
															</td>
                                                            <td>
																<span class="badge">{{$job->description}}</span>
															</td>
														</tr>
														@endforeach
												
													</tbody>
													<!--end::Table body-->
												</table>

												<!--end::Table-->
=======
											<div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="table-responsive">
													<!--begin::Table-->
													<a href="pages/careers/apply.html" class="btn btn-sm btn-primary mt-5">Accept Selected Jobs</a>
													<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="newJobInquiriesTable">
														<!--begin::Table head-->
														<thead>
															<tr class="fw-bold">
																<th class="w-25px">
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
																	</div>
																</th>
																<th class="min-w-250px">Urgency Level</th>
																<th class="min-w-250px">Admin Panel Job ID</th>
																<th class="min-w-250px">HCP invoice</th>
																<th class="min-w-250px">B2B/ Warranty Reference ID</th>
																<th class="min-w-250px">Source (B2C, B2B, Warranty)</th>
																<th class="min-w-250px">Company name</th>
																<th class="min-w-250px">Customer name</th>
																<th class="min-w-250px">Phone number</th>
																<th class="min-w-250px">Job Postal Code</th>
																<th class="min-w-250px">Appointment Time window </th>
																<th class="min-w-250px">Days to The Appointment</th>
																<th class="min-w-250px">Current Job Stage</th>
																<th class="min-w-250px">Next Job Stage</th>
																<th class="min-w-250px">Type of Job (Appliance/ Other)</th>
																<th class="min-w-250px">Type of Product</th>
																<th class="min-w-250px">Problem Description</th>
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
																	<a href="{{route('call.details',['edit'=>false])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">w-121212</a>
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
																	<a href="{{route('call.details',['edit'=>false])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">w-344334</a>
																</td>
																<td>
																	<span class="text-muted fw-semibold text-muted d-block fs-7">vvvvv</span>
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
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<span class="badge badge-light-success">canceled</span>
																</td>
																<td>
																	<a href="{{route('call.details',['edit'=>false])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">t-00000</a>
																</td>
																<td>
																	<span class="text-muted fw-semibold text-muted d-block fs-7">bbbbb</span>
																</td>
																<td>
																	<span class="text-muted fw-semibold text-muted d-block fs-7">fsfe dfsf</span>
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
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<span class="badge badge-light-success">Solved</span>
																</td>
																<td>
																	<a href="{{route('call.details',['edit'=>false])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">f-383838</a>
																</td>
																<td>
																	<span class="text-muted fw-semibold text-muted d-block fs-7">aaaaa</span>
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
>>>>>>> 8edad558a3b22b70eae112c16d1ce8a3b630d25c
											</div>
											<!--end::Table container-->
											<a href="pages/careers/apply.html" class="btn btn-sm btn-primary mt-5">Accept Selected Jobs</a>
										</div>
										<!--begin::Body-->
										
									</div>
									<!--end::Tables Widget 13-->
								</div>
								<!--end::Content container-->
							</div>
							
							<div class="d-flex justify-content-center">
            {{ $jobs->links('pagination::bootstrap-4') }}
        </div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
				
					</div>
					<!--end:::Main-->
  
</x-default-layout>