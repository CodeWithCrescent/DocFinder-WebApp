@extends('layouts.app')

@section('page')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Add New Doctor</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                <li class="breadcrumb-item"><a href="doctors.html">Doctors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                {{-- <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4">
                        @if (isset($agent->profile_photo_path))
                            <img src="{{ asset('storage/' . $agent->profile_photo_path) }}" alt="Profile Picture"
                                width="100">
                        @endif
                        <img src="{{ asset('assets/images/doctors/01.jpg') }}"
                            class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                        <h5 class="">Upload your picture</h5>
                        <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either .jpg or
                            .png format</p>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                        <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                    </div><!--end col-->
                </div><!--end row--> --}}

                <form method="POST" action="{{ route('admin.add.doctor') }}" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        @include('components.validation-message')

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" id="name" type="text" class="form-control"
                                    value="{{ old('name') }}" placeholder="Doctor Name :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" id="email" type="email" class="form-control"
                                    value="{{ old('email') }}" placeholder="Email :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phone no.</label>
                                <input name="phone" id="phone" type="tel" class="form-control"
                                    value="{{ old('phone') }}" placeholder="Phone no. :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select form-control" name="gender" value="{{ old('gender') }}">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="profile">Profile Picture</label>
                                <input type="file" class="form-control" id="profile" name="profile_photo_path"
                                    accept="image/*" />
                            </div>
                        </div><!--end col-->


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Hospital</label>
                                <select class="form-select form-control" name="hospital" value="{{ old('hospital') }}">
                                    @forelse ($hospitals as $hospital)
                                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                    @empty
                                        <option value="">No Hospital added</option>
                                    @endforelse
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select class="form-select form-control" name="department" value="{{ old('department') }}">
                                    @forelse ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @empty
                                        <option value="">No Department added</option>
                                    @endforelse
                                </select>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Specialty</label>
                                <input name="specialty" id="specialty" type="text" class="form-control"
                                    value="{{ old('specialty') }}" placeholder="General">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Year Started Career</label>
                                <input type="number" class="form-control" placeholder="- - - -" aria-label="year"
                                    aria-describedby="year-id" name="started_year" min="1970" max="2024"
                                    value="{{ old('started_year') }}" title="year started doctor career">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Bio Here</label>
                                <textarea name="bio" id="bio" rows="3" class="form-control" placeholder="Bio :">{{ old('started_year') ?? null }}</textarea>
                            </div>
                        </div>
                    </div><!--end row-->

                    <button type="submit" class="btn btn-primary">Add Doctor</button>
                </form>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 mt-4">
            <div class="card rounded border-0 shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0">Doctors List</h5>
                </div>

                <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                    @forelse ($doctors as $doctor)
                        <li class="d-md-flex align-items-center text-center text-md-start mb-4">
                            <img src="{{ asset($doctor->profile_photo_path ? 'storage/' . $doctor->profile_photo_path : 'storage/profile_photos/user-avatar.png') }}"
                                alt="Doctor's Profile Picture" class="avatar avatar-medium rounded-md shadow p-2">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="#" class="text-dark h6">Dr. {{ $doctor->name }}</a>
                                <p class="text-muted my-1">{{ $doctor->doctorDetails->specialty }}</p>
                                <p class="text-muted mb-0">{{ now()->year - $doctor->doctorDetails->started_year }} Years
                                    Experienced</p>
                            </div>
                        </li>
                    @empty
                        <li class="d-md-flex align-items-center text-center text-md-start">No Doctor added</li>
                    @endforelse

                    @if ($doctors->count() >= 5)
                        <li class="mt-4">
                            <a href="#" class="btn btn-primary">All Doctors</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div><!--end row-->


    @push('scripts')
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    @endpush
@endsection
