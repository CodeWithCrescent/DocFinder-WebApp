@extends('layouts.app')

@section('page')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Hospitals List</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">DocFinder</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hospitals</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addhospital">Add New
                Hospital</a>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive shadow rounded">
                <table class="table table-center bg-white mb-0">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 50px;">Id</th>
                            <th class="border-bottom p-3" style="min-width: 180px;">Name</th>
                            <th class="border-bottom p-3">Address</th>
                            <th class="border-bottom p-3">email</th>
                            <th class="border-bottom p-3">Mobile No.</th>
                            <th class="border-bottom p-3">No of Depts.</th>
                            <th class="border-bottom p-3">Status</th>
                            <th class="border-bottom p-3 text-center" style="min-width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hospitals as $index => $hospital)
                            <tr>
                                <th class="p-3">{{ $index + 1 }}</th>
                                <td class="py-3">
                                    <a href="{{ route('admin.hospital.edit', $hospital->id) }}" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/02.jpg"
                                                class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="ms-2">{{ $hospital->name }}</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">{{ $hospital->address }}</td>
                                <td class="p-3">{{ $hospital->email }}</td>
                                <td class="p-3">{{ $hospital->phone_number }}</td>
                                <td class="p-3">{{ $hospital->department->count() }}</td>
                                <td class="p-3"><span class="badge bg-soft-success">{{ $hospital->status }}</span></td>
                                <td class="text-center p-3">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewhospital"><i class="ri-eye-line"></i></a>
                                    <a href="{{ route('admin.hospital.edit', $hospital->id) }}" class="btn btn-icon btn-pills btn-soft-success"><i class="ri-pencil-line"></i></a>
                                </td>
                            </tr>
                        @empty
                        <tr class="mt-4 px-4">No hospital added! </tr>
                        @endforelse
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
        <!-- Add New Hospital Start -->
        <div class="modal fade" id="addhospital" tabindex="-1" aria-labelledby="addHospitalModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="addHospitalModal">Add New Hospital</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                                class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4">
                                <img src="{{ asset('assets/images/hospitals/1.jpg') }}" width="200px"
                                    class="shadow mx-auto d-block" alt="">
                            </div><!--end col-->

                            <div class="col-lg-5 col-md-8 text-center text-md-start px-4 mt-4 mt-sm-0">
                                <h5 class="">Upload hospital picture</h5>
                                <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either
                                    .jpg or
                                    .png format</p>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                <a href="#" class="btn btn-primary">Upload</a>
                                <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                            </div><!--end col-->
                        </div><!--end row-->

                        <form method="POST" action="{{ route('admin.hospital.create') }}" class="mt-4">
                            @csrf
                            @include('components.validation-message')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Hospital Name</label>
                                        <input name="name" value="{{ old('name') }}" id="name" type="text"
                                            class="form-control" placeholder="Hospital Name :" required autocomplete="off">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input name="address" value="{{ old('address') }}" id="name2" type="address"
                                            class="form-control" placeholder="Address :" required>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" value="{{ old('email') }}" id="email" type="email"
                                            class="form-control" placeholder="Email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone no.</label>
                                        <input name="phone" value="{{ old('phone') }}" id="phone" type="text"
                                            class="form-control" placeholder="Phone no. :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Instagram</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text bg-light border border-end-0 text-dark"
                                                id="insta-id"><i data-feather="instagram" class="fea icon-sm"></i></span>
                                            <input type="text" name="instagram" value="{{ old('instagram') }}"
                                                class="form-control" placeholder="Username" aria-label="Username"
                                                aria-describedby="insta-id">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Facebook</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text bg-light border border-end-0 text-dark"
                                                id="fb-id"><i data-feather="facebook" class="fea icon-sm"></i></span>
                                            <input type="text" name="facebook" value="{{ old('facebook') }}"
                                                class="form-control" placeholder="Username" aria-label="Username"
                                                aria-describedby="fb-id">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Linkedin</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text bg-light border border-end-0 text-dark"
                                                id="linke-pro"><i data-feather="linkedin" class="fea icon-sm"></i></span>
                                            <input type="text" name="linkedin" value=" {{ old('linkedin') }}"
                                                class="form-control" placeholder="Username" aria-label="Username"
                                                aria-describedby="linke-pro">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Twitter</label>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text bg-light border border-end-0 text-dark"
                                                id="twitter-id"><i data-feather="twitter" class="fea icon-sm"></i></span>
                                            <input type="text" name="twitter" value="{{ old('twitter') }}"
                                                class="form-control" placeholder="Username" aria-label="Username"
                                                aria-describedby="twitter-id">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Hospital Bio Here</label>
                                        <textarea name="bio" id="bio" rows="3" class="form-control" placeholder="Bio :">{{ old('bio') ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <button type="submit" class="btn btn-primary">Add Hospital</button>
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add New Hospital End -->

        <!-- Profile Start -->
        <div class="modal fade" id="viewhospital" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel1">Profile</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                                class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="d-flex align-items-center">
                            <img src="../assets/images/client/01.jpg" class="avatar avatar-small rounded-pill"
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
        <!-- Profile End -->
    @endpush


    @push('scripts')
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    @endpush
@endsection
