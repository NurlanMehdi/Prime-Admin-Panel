<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
	        
	<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
		    <div class="menu-item">
				<!--begin:Menu link-->
				<a class="menu-link" href="" target="_blank">
					<span class="menu-icon">{!! getIcon('rocket', 'fs-2') !!}</span>
					<span class="menu-title">Main</span>
				</a>
				<!--end:Menu link-->
			</div>	
	     	<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
					<span class="menu-title">Scheduling Panel</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('job.search') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Job Search</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('new.job.inquiries') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">New Job Inquiries</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('in.progress.jobs') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">In Progress Jobs</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Cancel/ Reschedule Inquiries</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Completed and Claimed Jobs</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('request.job.authorization') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Request Job Authorization</span>
						</a>
				
						<!--end:Menu link-->
					</div>
					
					<!--end:Menu item-->
					
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->

			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
					<span class="menu-title">Reporting Panel</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Job Report  Search</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">In Progress Reports</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Completed Reports - Awaiting an Audit</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Completed Reports - Passed an Audit</span>
						</a>
						<!--end:Menu link-->
					</div>
			
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
					<span class="menu-title">Warranty Customers - Claims Panel</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Claims Search</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Status - Submitted</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Status - Paid</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Status - Rejected</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Status - Other</span>
						</a>
						<!--end:Menu link-->
					</div>
			
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
					<span class="menu-title">B2B Customers - Batch Payments Panel</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch Search</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch Pending</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch Submitted</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch Paid Awaiting Audit</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch Paid Audit Approved</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Batch in Need of Amendments </span>
						</a>
						<!--end:Menu link-->
					</div>
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
			<!--begin:Menu item-->
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				<!--begin:Menu link-->
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
					<span class="menu-title">Settings page</span>
					<span class="menu-arrow"></span>
				</span>
				<!--end:Menu link-->
				<!--begin:Menu sub-->
				<div class="menu-sub menu-sub-accordion">
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">Technicians phone numbers</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">B2B/ Warranty - Customer setup</span>
						</a>
						<!--end:Menu link-->
					</div>
				</div>
				<!--end:Menu sub-->
			</div>
			<!--end:Menu item-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
