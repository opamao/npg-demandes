@extends('layouts.master', [
    'title' => 'Settings',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
@endpush
@push('scripts')
    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js" type="ad7fb19a28fe3ddebb495ab4-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="ad7fb19a28fe3ddebb495ab4-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="ad7fb19a28fe3ddebb495ab4-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="ad7fb19a28fe3ddebb495ab4-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="ad7fb19a28fe3ddebb495ab4-text/javascript"></script>
@endpush
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body w-100">
                        <div class="content-page-header">
                            <h5 class="setting-menu">Account Settings</h5>
                        </div>
                        <div class="row">
                            <div class="profile-picture">
                                <div class="upload-profile me-2">
                                    <div class="profile-img">
                                        <img id="blah" class="avatar" src="assets/img/profiles/avatar-10.jpg"
                                            alt="profile-img">
                                    </div>
                                </div>
                                <div class="img-upload">
                                    <label class="btn btn-primary">
                                        Upload new picture <input type="file">
                                    </label>
                                    <a class="btn btn-remove">Delete</a>
                                    <p class="mt-1">Logo Should be minimum 152 * 152 Supported File format
                                        JPG,PNG,SVG</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h5>General Information</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-0">
                                    <label>Gender</label>
                                    <select class="select">
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Date of Birth</label>
                                    <div class="cal-icon cal-icon-info">
                                        <input type="text" class="datetimepicker form-control" placeholder="Select Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h5>Address Information</h5>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-block mb-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Enter your Country">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="Enter your State">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="Enter your City">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="input-block mb-3">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Postal Code">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path text-end">
                                    <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Cancel</a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
