<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="{{ route('doctors.all') }}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="{{ route('patient.show') }}"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="{{ route('appointments.show') }}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="{{ route('schedules.show') }}"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li>
                            <a href="{{ route('departments.show') }}"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('employees.show') }}">Employees List</a></li>
								<li><a href="{{ route('leaves.show') }}">Leaves</a></li>
								<li><a href="{{ route('holidays.show') }}">Holidays</a></li>
								<li><a href="{{ route('attendence.show') }}">Attendance</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('invoices.show') }}">Invoices</a></li>
								<li><a href="{{ route('expenses.show') }}">Expenses</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="salary.html"> Employee Salary </a></li>
								<li><a href="salary-view.html"> Payslip </a></li>
							</ul>
						</li>

                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog View</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>
                            </ul>
                        </li>
						
						<li>
							<a href="activities.html"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="expense-reports.html"> Expense Report </a></li>
								<li><a href="invoice-reports.html"> Invoice Report </a></li>
							</ul>
						</li>
                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>