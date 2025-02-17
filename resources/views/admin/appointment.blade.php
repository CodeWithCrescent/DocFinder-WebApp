@extends('layouts.app')

@section('page')
    <div class="row">
        <div class="col-xl-9 col-lg-6 col-md-4">
            <h5 class="mb-0">Appointment</h5>
            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
            <div class="justify-content-md-end">
                <form>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-md-5">
                            <div class="mb-0 position-relative">
                                <select class="form-select form-control">
                                    <option value="EY">Today</option>
                                    <option value="GY">Tomorrow</option>
                                    <option value="PS">Yesterday</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#appointmentform">Appointment</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 50px;">#</th>
                            <th class="border-bottom p-3" style="min-width: 180px;">Name</th>
                            <th class="border-bottom p-3" style="min-width: 150px;">Email</th>
                            <th class="border-bottom p-3">Age</th>
                            <th class="border-bottom p-3">Gender</th>
                            <th class="border-bottom p-3">Department</th>
                            <th class="border-bottom p-3" style="min-width: 150px;">Date</th>
                            <th class="border-bottom p-3">Time</th>
                            <th class="border-bottom p-3" style="min-width: 220px;">Doctor</th>
                            <th class="border-bottom p-3">Fees</th>
                            <th class="border-bottom p-3" style="min-width: 150px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="p-3">1</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Howard Tanner</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">howard@contact.com</td>
                            <td class="p-3">25</td>
                            <td class="p-3">Male</td>
                            <td class="p-3">Cardiology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/01.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Calvin Carlo</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">2</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/02.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Wendy Filson</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">wendy@contact.com</td>
                            <td class="p-3">28</td>
                            <td class="p-3">Female</td>
                            <td class="p-3">Gynecology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/02.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Cristino Murphy</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">3</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/03.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Faye Bridger</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">faye@contact.com</td>
                            <td class="p-3">28</td>
                            <td class="p-3">Female</td>
                            <td class="p-3">Psychotherapy</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/03.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Alia Reddy</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">4</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/04.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Ronald Curtis</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">ronald@contact.com</td>
                            <td class="p-3">25</td>
                            <td class="p-3">Male</td>
                            <td class="p-3">Orthopedic</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/04.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Toni Kovar</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">5</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Melissa Hibner</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">melissa@contact.com</td>
                            <td class="p-3">28</td>
                            <td class="p-3">Female</td>
                            <td class="p-3">Dental</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/05.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Jessica McFarlane</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">6</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/06.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Randall Case</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">randall@contact.com</td>
                            <td class="p-3">25</td>
                            <td class="p-3">Male</td>
                            <td class="p-3">Orthopedic</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/04.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Toni Kovar</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">7</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/07.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Jerry Morena</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">jerry@contact.com</td>
                            <td class="p-3">25</td>
                            <td class="p-3">Male</td>
                            <td class="p-3">Dentist</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/05.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Jessica McFarlane</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">8</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/08.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Lester McNally</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">jessica@contact.com</td>
                            <td class="p-3">25</td>
                            <td class="p-3">Male</td>
                            <td class="p-3">Gastrology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/06.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Elsie Sherman</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">9</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/09.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Christopher Burrell</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">christopher@contact.com</td>
                            <td class="p-3">28</td>
                            <td class="p-3">Female</td>
                            <td class="p-3">Urology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/07.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Bertha Magers</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <th class="p-3">10</th>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/client/10.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">Mary Skeens</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">mary@contact.com</td>
                            <td class="p-3">28</td>
                            <td class="p-3">Female</td>
                            <td class="p-3">Neurology</td>
                            <td class="p-3">20th Dec 2020</td>
                            <td class="p-3">11:00AM</td>
                            <td class="p-3">
                                <a href="#" class="text-dark">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/doctors/08.jpg') }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <span class="ms-2">Dr. Louis Batey</span>
                                    </div>
                                </a>
                            </td>
                            <td class="p-3">$50/Patient</td>
                            <td class="text-end p-3">
                                <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal"
                                    data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end row-->

    <div class="row text-center">
        <!-- PAGINATION START -->
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                </ul>
            </div>
        </div><!--end col-->
        <!-- PAGINATION END -->
    </div><!--end row-->


    @push('modals')
        <!-- Add New Appointment Start -->
        <div class="modal fade" id="appointmentform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Book an Appointment</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                                class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Patient Name :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Departments</label>
                                        <select class="form-select form-control">
                                            <option value="EY">Eye Care</option>
                                            <option value="GY">Gynecologist</option>
                                            <option value="PS">Psychotherapist</option>
                                            <option value="OR">Orthopedic</option>
                                            <option value="DE">Dentist</option>
                                            <option value="GA">Gastrologist</option>
                                            <option value="UR">Urologist</option>
                                            <option value="NE">Neurologist</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Doctor</label>
                                        <select class="form-select form-control">
                                            <option value="CA">Dr. Calvin Carlo</option>
                                            <option value="CR">Dr. Cristino Murphy</option>
                                            <option value="AL">Dr. Alia Reddy</option>
                                            <option value="TO">Dr. Toni Kovar</option>
                                            <option value="JE">Dr. Jessica McFarlane</option>
                                            <option value="EL">Dr. Elsie Sherman</option>
                                            <option value="BE">Dr. Bertha Magers</option>
                                            <option value="LO">Dr. Louis Batey</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                        <input name="phone" id="phone" type="tel" class="form-control"
                                            placeholder="Your Phone :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"> Date : </label>
                                        <input name="date" type="text" class="form-control start"
                                            placeholder="Select date :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="input-time">Time : </label>
                                        <input name="time" type="text" class="form-control timepicker" id="input-time"
                                            placeholder="03:30 PM">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comments <span class="text-danger">*</span></label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add New Appointment End -->

        <!-- View Appintment Start -->
        <div class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                                class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/client/01.jpg') }}" class="avatar avatar-small rounded-pill"
                                alt="">
                            <h5 class="mb-0 ms-3">Howard Tanner</h5>
                        </div>
                        <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Age:</h6>
                                        <p class="text-muted ms-2">25 year old</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Gender:</h6>
                                        <p class="text-muted ms-2">Male</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Department:</h6>
                                        <p class="text-muted ms-2 mb-0">Cardiology</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Date:</h6>
                                        <p class="text-muted ms-2">20th Dec 2020</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Time:</h6>
                                        <p class="text-muted ms-2">11:00 AM</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Doctor:</h6>
                                        <p class="text-muted ms-2 mb-0">Dr. Calvin Carlo</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- View Appintment End -->

        <!-- Accept Appointment Start -->
        <div class="modal fade" id="acceptappointment" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-success rounded-circle mx-auto"
                                style="height: 95px; width:95px;">
                                <i class="uil uil-check-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Accept Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get
                                    immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-success">Accept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accept Appointment End -->

        <!-- Cancel Appointment Start -->
        <div class="modal fade" id="cancelappointment" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto"
                                style="height: 95px; width:95px;">
                                <i class="uil uil-times-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Cancel Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get
                                    immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cancel Appointment End -->
    @endpush

    @push('styles')
        <link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css') }}" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    @endpush
@endsection
