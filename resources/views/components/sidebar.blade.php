<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/images/logo-dark.png') }}" height="22" class="logo-light-mode" alt="">
                <img src="{{ asset('assets/images/logo-light.png') }}" height="22" class="logo-dark-mode"
                    alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('assets/images/logo-light.png') }}" height="22" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}"><i class="ri-dashboard-line me-2 d-inline-block"></i>Dashboard</a></li>

            <li><a href="{{ route('admin.appointments') }}"><i class="ri-stethoscope-line me-2 d-inline-block"></i>Appointment</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-hospital-line me-2 d-inline-block"></i>Hospitals</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="#">Hospitals</a></li>
                        <li><a href="#">Add Hospital</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-user-line me-2 d-inline-block"></i>Doctors</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.doctors') }}">Doctors</a></li>
                        <li><a href="{{ route('admin.add.doctor') }}">Add Doctor</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="{{ route('admin.patients') }}"><i class="ri-wheelchair-line me-2 d-inline-block"></i>Patients</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-more-fill me-2 d-inline-block"></i>More</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="review.html">Reviews</a></li>
                        <li><a href="invoice-list.html">Invoice List</a></li>
                        <li><a href="terms.html">Terms & Policy</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="#" target="_blank"><i
                        class="ri-window-line me-2 d-inline-block"></i>Landing page</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-0">
        <li class="list-inline-item mb-0 ms-1">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                <i class="ri-chat-3-line"></i>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
