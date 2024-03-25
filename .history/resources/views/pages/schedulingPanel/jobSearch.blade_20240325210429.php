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
                        Job Search
                        @endsection
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        @section('breadcrumbs')
                        {{ Breadcrumbs::render('jobSearch') }}
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
                    <!--begin::Form-->
                    <form id="jobSearchForm" action="{{ route('job.search.filter') }}" method="post">
					@csrf<!--begin::Card-->
                        <div class="card mb-7">
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Compact form-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Input group-->
                                    <!--<div class="position-relative w-md-400px me-md-3">
                                        <label class="form-label fw-semibold">Job Status</label>
                                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Job Status" class="form-select form-select-solid ps-10 w-250px">
                                            <option></option>
                                            <option value="1">Canceled</option>
                                            <option value="2">Rejected</option>
                                            <option value="3">New Job Inquiry</option>
                                            <option value="4">In Progress</option>
                                            <option value="4">Completed and Claimed</option>
                                            <option value="4">Request authorization</option>
                                        </select>
                                    </div> -->
                                    <div class="position-relative w-md-400px me-md-3">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Admin Panel Job ID</label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid ps-10" name="adminJobId" value="" placeholder="E.x. w-21232" />
                                    </div>
                                    <div class="position-relative w-md-400px me-md-3">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">HCP Invoice Number</label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid ps-10" name="invoiceNumber" value="" placeholder="E.x. w-21232" />
                                    </div>
                                    <div class="position-relative w-md-400px me-md-3">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">B2B/ Warranty Reference ID</label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid ps-10" name="referanceId" value="" placeholder="E.x. w-21232" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin:Action-->
                                    <div class="d-flex align-items-center">
                                        <button type="submit" class="btn btn-primary me-5">Search</button>
                                        <a href="#" id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#kt_advanced_search_form"></a>
                                    </div>
                                    <!--end:Action-->
                                </div>
                                <!--end::Compact form-->

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Tables Widget 13-->
                    <div class="card mb-6 mb-xl-10"  id="searchResultsTable"  style="display: none;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Search Results</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                   <!--begin::Table head-->
									<thead>
										<tr class="fw-bold">
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
                                    <tbody id="searchResultsTableBody">
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

<!-- Add this script at the end of your Blade template or in a separate JavaScript file -->
<script>

document.getElementById('jobSearchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Form data collection
    var formData = new FormData(this);
    
    // Count of filled input fields
    var filledInputsCount = 0;
    
    // Count input fields with data
    for (var value of formData.values()) {
        if (value.trim() !== '') {
            filledInputsCount++;
        }
    }
    
    // If there is only one input field with data, submit the form
    if (filledInputsCount === 2) {
        // Submit the form using AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Handle JSON response
            if (data.success) {
                var customerData = JSON.parse(data.jobs.customer);
                var address = JSON.parse(data.jobs.address);
                var schedule = JSON.parse(data.jobs.schedule);

                // var start_time = schedule.appointments.start_time;
                // var end_time = schedule.appointments.end_time;

                // var startDate = new Date(start_time);
                // var endDate = new Date(end_time);

                // // Calculate the difference in milliseconds
                // var differenceInMs = endDate - startDate;

                // // Convert milliseconds to days
                // var differenceInDays = differenceInMs / (1000 * 60 * 60 * 24);

                console.log(schedule)
                // Make the table visible in case of successful response or perform other actions
                var newRow = '<tr>' +
                '<td>' +
                    '<div class="form-check form-check-sm form-check-custom form-check-solid">' +
                        '<input class="form-check-input widget-13-check" type="checkbox" value="1" />' +
                    '</div>' +
                '</td>' +
                '<td>' +
                '<span class="badge"></span>'
                    +
                    
                '</td>' +
                '<td>' +

                '<a href="{{ route('call.details', ['edit' => 'false']) }}" class="text-gray-900 fw-bold text-hover-primary fs-6">W-'+data.jobs.id+'</a>' 
                    +
                '</td>' +
                '<td>' +
                    '<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">'+ data.jobs.invoice_number+'</a>' +
                '</td>' +
                '<td>' +
                    '<a href="#" class="fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>' +
                '</td>' +
                '<td class="fw-bold fs-6">$3560</td>' +
                '<td>' +
                    '<span class="badge">'+ data.jobs.company_name +'</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ customerData.last_name + ' ' + customerData.first_name +'</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ customerData.mobile_number +'</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ address.zip +'</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ schedule.appointments.arrival_window_minutes + '</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ schedule.appointments.arrival_window_minutes + '</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">Code: PH</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">Code: PH</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">Code: PH</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">Code: PH</span>' +
                '</td>' +
                '<td>' +
                    '<span class="badge">'+ data.jobs.description + '</span>' +
                '</td>' +
            '</tr>';


                // Append the new row to the table body
                document.getElementById('searchResultsTableBody').innerHTML = '';
                document.getElementById('searchResultsTableBody').insertAdjacentHTML('beforeend', newRow);
                
                document.getElementById('searchResultsTable').style.display = 'block';
            }
        })
        .catch(error => {
            // Log error message in case of failure
            console.error('Error:', error);
        });
    } else {
        // Prevent form submission and alert user if there is not exactly one input field with data
        event.preventDefault(); // Prevent form submission
        alert("Please fill only one field.");
    }
});



</script>
