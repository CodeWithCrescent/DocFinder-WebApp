@extends('layouts.app')

@section('page')
    <div class="row">
        <div class="col-xl-9 col-md-6">
            <h5 class="mb-0">Doctors</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#">DocFinder</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ul>
            </nav>
        </div><!--end col-->

        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
            <a href="{{ route('admin.add.doctor') }}" class="btn btn-primary">Add New Doctor</a>
        </div><!--end col-->
    </div><!--end row-->


    <div class="row row-cols-md-2 row-cols-lg-5">
        @forelse ($doctors as $doctor)
            <div class="col mt-4">
                <div class="card team border-0 rounded shadow overflow-hidden">
                    <div class="team-img position-relative d-flex justify-content-center align-items-center">
                        <div class="image-container" style="width: 200px; height: 200px;">
                            <img src="{{ asset($doctor->profile_photo_path ? 'storage/' . $doctor->profile_photo_path : 'storage/profile_photos/user-avatar.png') }}"
                                alt="Doctor's Profile Picture" class="img-fluid"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <ul class="list-unstyled team-social mb-0">
                            <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook"
                                        class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        data-feather="linkedin" class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        data-feather="instagram" class="icons"></i></a></li>
                            <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                        data-feather="twitter" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content text-center">
                        <a href="dr-profile.html" class="title text-dark h5 d-block mb-0">{{ $doctor->name }}</a>
                        <small class="text-muted speciality">{{ $doctor->doctorDetails->specialty }}</small>
                    </div>
                </div>
            </div><!--end col-->
        @empty
            <h4>No doctor added.</h4>
        @endforelse

    </div><!--end row-->

    @push('styles')
        <link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css') }}" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    @endpush
@endsection
