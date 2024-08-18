@extends('layouts.app')

@section('page')
    <div class="d-md-flex justify-content-between">
        <h5 class="mb-0">Muhumbili National Hospital</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">DocFinder</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.hospital.edit', $hospital->id) }}">Hospital</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        @include('components.validation-message')
        <div class="col-lg-8 mt-4">
            <div class="card border-0 p-4 rounded shadow">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <img src="{{ asset('assets/images/hospitals/1.jpg') }}" width="200px"
                            class="shadow mx-auto d-block" alt="">
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                        <h5 class="">Upload hospital picture</h5>
                        <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either .jpg or
                            .png format</p>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                        <a href="#" class="btn btn-primary">Upload</a>
                        <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                    </div><!--end col-->
                </div><!--end row-->

                <form method="POST" action="{{ route('admin.hospital.update', $hospital->id) }}" class="mt-4">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Hospital Name</label>
                                <input name="name" value="{{ $hospital->name ?? null }}" id="name" type="text"
                                    class="form-control" placeholder="Hospital Name :" required autocomplete="off">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input name="address" value="{{ $hospital->address ?? null }}" id="name2" type="address"
                                    class="form-control" placeholder="Address :" required>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" value="{{ $hospital->email ?? null }}" id="email" type="email"
                                    class="form-control" placeholder="Email :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone no.</label>
                                <input name="phone" value="{{ $hospital->phone_number ?? null }}" id="phone"
                                    type="tel" class="form-control" placeholder="Phone no. :">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="insta-id"><i
                                            data-feather="instagram" class="fea icon-sm"></i></span>
                                    <input type="text" name="instagram" value="{{ $hospital->instagram ?? null }}"
                                        class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="insta-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text bg-light border border-end-0 text-dark" id="fb-id"><i
                                            data-feather="facebook" class="fea icon-sm"></i></span>
                                    <input type="text" name="facebook" value="{{ $hospital->facebook ?? null }}"
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
                                    <input type="text" name="linkedin" value="{{ $hospital->linkedin ?? null }}"
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
                                    <input type="text" name="twitter" value="{{ $hospital->twitter ?? null }}"
                                        class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="twitter-id">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Hospital Bio Here</label>
                                <textarea name="bio" id="bio" rows="3" class="form-control" placeholder="Bio :">{{ $hospital->bio ?? null }}</textarea>
                            </div>
                        </div>
                    </div><!--end row-->

                    <button type="submit" class="btn btn-primary">Update Hospital</button>
                </form>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 mt-4">
            <div class="card rounded border-0 shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0">Departments List</h5>
                </div>

                <form class="mt-4 px-4" method="POST" action="{{ route('admin.department.create') }}">
                    @csrf
                    <input type="hidden" name="hospital" value="{{ $hospital->id }}">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <input name="code" id="code" type="text" class="form-control"
                                    placeholder="Code" required>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <input name="department_name" id="department_name" type="text" class="form-control"
                                    placeholder="Department Name" required>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-3">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Add </button>
                            </div>
                        </div><!--end col-->
                    </div>
                </form>

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="table-responsive shadow rounded">
                            <table class="table table-center bg-white mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3" style="min-width: 50px;">SN</th>
                                        <th class="border-bottom p-3" style="min-width: 100px;">Code</th>
                                        <th class="border-bottom p-3" style="min-width: 180px;">Name</th>
                                        <th class="border-bottom p-3" style="min-width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($departments as $index => $department)
                                        <tr>
                                            <th class="p-3">{{ ++$index }}</th>
                                            <td class="p-3">{{ $department->code }}</td>
                                            <td class="p-3">{{ $department->name }}</td>
                                            <td class="p-3"><a href="#" class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i>Edit</a></td>
                                        </tr>
                                    @empty
                                        <p>No department added!</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->

    @push('scripts')
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    @endpush
@endsection
