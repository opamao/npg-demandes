@extends('layouts.master', [
    'title' => 'Add Customer',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Intl Tell Input CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intlTelInput/css/intlTelInput.css">
@endpush

@push('scripts')
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('') }}assets/js/feather.min.js" type="f714bfb05fbdb3c5edb32043-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="f714bfb05fbdb3c5edb32043-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="f714bfb05fbdb3c5edb32043-text/javascript"></script>

    <!-- Intl Tell Input js -->
    <script src="{{ URL::asset('') }}assets/plugins/intlTelInput/js/intlTelInput-jquery.min.js" type="f714bfb05fbdb3c5edb32043-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>Add Customer</h5>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#">
                                @csrf
                                <div class="form-group-item">
                                    <h5 class="form-title">Basic Details</h5>
                                    <div class="profile-picture">
                                        <div class="upload-profile">
                                            <div class="profile-img">
                                                <img id="blah" class="avatar" src="assets/img/profiles/avatar-14.jpg"
                                                    alt="profile-img">
                                            </div>
                                            <div class="add-profile">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                                                    <div class="img-upload">
                                                        <br>
                                                        <label class="btn btn-upload">
                                                            Upload <input name="photo" type="file" id="avatar_upload">
                                                        </label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>User name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input type="text" id="mobile_code" class="form-control"
                                                    placeholder="Phone Number" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Website</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Website Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" id="mobile_code" class="form-control"
                                                    placeholder="Password" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Confirm password <span class="text-danger">*</span></label>
                                                <input type="password" id="mobile_code" class="form-control"
                                                    placeholder="Password" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Currency</label>
                                                <select class="select">
                                                    <option value="">Select Currency</option>
                                                    <option value="xof">XOF</option>
                                                    <option value="$">$</option>
                                                    <option value="€">€</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-customer-btns text-end">
                                    <a href="customers.html" class="btn customer-btn-cancel">Cancel</a>
                                    <a href="customers.html" class="btn customer-btn-save">Save Changes</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
