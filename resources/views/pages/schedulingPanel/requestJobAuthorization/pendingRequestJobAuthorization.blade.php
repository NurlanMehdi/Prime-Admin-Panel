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
                        Pending Request Job Authorizations
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
											<th class="min-w-150px">Request Job Authorization Profile</th>
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
																<a href="{{route('authorization.profile.details')}}" class="text-gray-900 fw-bold text-hover-primary fs-6">rjap-12196</a>
															</td>
															<td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">rjap-12196-1</span>
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
																<a href="{{route('call.details',['edit'=>true])}}" class="text-gray-900 fw-bold text-hover-primary fs-6">rjap-12195</a>
															</td>
															<td>
																<span class="text-muted fw-semibold text-muted d-block fs-7">rjap-12195-1</span>
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
    <!--end:::Main-->

</x-default-layout>

<!-- Add this script at the end of your Blade template or in a separate JavaScript file -->
<script>
    document.getElementById('jobSearchForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Perform an AJAX request to submit the form
        fetch(this.action, {
            method: 'POST',
            body: new FormData(this),
        })
            .then(response => response.json())
            .then(data => {
                // Handle the JSON response
                if (data.success) {
                    // Assuming the table ID is 'searchResultsTable', you can open it or perform any other actions
                    document.getElementById('searchResultsTable').style.display = 'table';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
