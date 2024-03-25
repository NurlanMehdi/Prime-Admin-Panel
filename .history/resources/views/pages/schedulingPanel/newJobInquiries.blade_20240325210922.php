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
											<div class="table-responsive">
												<!--begin::Table-->
										
												<table id="newJobInquiriesTable" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
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
														<tr class="filters">

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