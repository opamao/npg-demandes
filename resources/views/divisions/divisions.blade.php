@extends('layouts.master', [
    'title' => __('messages.users'),
])
@push('scripthaut')
    <script data-cfasync="false"
        src="{{ URL::asset('') }}assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/buttons.dataTables.css">
@endpush

@push('scripts')
    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.buttons.js"></script>
    <script src="{{ URL::asset('') }}assets/js/buttons.dataTables.js"></script>
    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Multiselect JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery-ui.min.js"></script>

    <script src="{{ URL::asset('') }}assets/js/jszip.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/pdfmake.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/vfs_fonts.js"></script>
    <script src="{{ URL::asset('') }}assets/js/buttons.html5.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/buttons.print.min.js"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>{{ __('messages.users') }}</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-import" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#import_user"><span><i
                                            class="fe fe-upload me-2"></i>{{ __('messages.import_user') }}</span></a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_user"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>{{ __('messages.add_user') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="super-admin-list-head">
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="grid-info-item total-items">
                                    <div class="grid-info">
                                        <span>{{ __('messages.total_client') }}</span>
                                        <h4>987</h4>
                                    </div>
                                    <div class="grid-head-icon">
                                        <i class="fe fe-life-buoy"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="grid-info-item active-items">
                                    <div class="grid-info">
                                        <span>{{ __('messages.active_client') }}</span>
                                        <h4>154</h4>
                                    </div>
                                    <div class="grid-head-icon">
                                        <i class="fe fe-check-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="grid-info-item inactive-items">
                                    <div class="grid-info">
                                        <span>{{ __('messages.inactive_client') }}</span>
                                        <h4>2</h4>
                                    </div>
                                    <div class="grid-head-icon">
                                        <i class="fe fe-x-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="grid-info-item location-info">
                                    <div class="grid-info">
                                        <span>{{ __('messages.client_online') }}</span>
                                        <h4>200</h4>
                                    </div>
                                    <div class="grid-head-icon">
                                        <i class="fe fe-map-pin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card">
                <div class="col-sm-12 card">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-center table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('messages.username') }}</th>
                                            <th>{{ __('messages.mobile_number') }}</th>
                                            <th>Role </th>
                                            <th>{{ __('messages.last_activity') }}</th>
                                            <th>{{ __('messages.created_on') }}</th>
                                            <th>{{ __('messages.status') }}</th>
                                            <th Class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                                    <a href="profile.html">John Smith <span><span class="__cf_email__"
                                                                data-cfemail="412b2e292f012439202c312d246f222e2c">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 989-438-3131</td>
                                            <td>$4,220</td>
                                            <td><span class="badge  bg-ash-gray text-gray-light">10 mins ago</span>
                                            </td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td><span class="badge  bg-success-light">Active</span></td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="users.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_user"><i
                                                                        class="far fa-edit me-2"></i>{{ __('messages.edit') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>{{ __('messages.delete') }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Robert <span><span class="__cf_email__"
                                                                data-cfemail="10627f72756264507568717d607c753e737f7d">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 917-409-0861</td>
                                            <td>$2,789</td>
                                            <td><span class="badge  bg-success-light">{{ __('messages.online') }}</span>
                                            </td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td><span class="badge bg-danger-light">{{ __('messages.deactive') }}</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="users.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_user"><i
                                                                        class="far fa-edit me-2"></i>{{ __('messages.edit') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>{{ __('messages.delete') }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- Add User -->
    <div class="modal custom-modal modal-lg fade" id="import_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">{{ __('messages.import_user') }}</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <input name="fileuser" type="file" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-back cancel-btn me-2">{{ __('messages.cancel') }}</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary paid-continue-btn">{{ __('messages.import') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add User -->
    <!-- Add User -->
    <div class="modal custom-modal modal-lg fade" id="add_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">{{ __('messages.add_user') }}</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="form-groups-item">
                                        <h5 class="form-title">{{ __('messages.profile_picture') }}</h5>
                                        <div class="profile-picture">
                                            <div class="upload-profile">
                                                <div class="profile-img">
                                                    <img id="blah" class="avatar"
                                                        src="assets/img/profiles/avatar-14.jpg" alt="profile-img">
                                                </div>
                                                <div class="add-profile">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label class="avatar avatar-xxl profile-cover-avatar"
                                                        for="avatar_upload">
                                                        <div class="img-upload">
                                                            <br>
                                                            <label class="btn btn-upload">
                                                                {{ __('messages.upload') }} <input name="photo"
                                                                    type="file" id="avatar_upload">
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.first_name') }}</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.last_name') }}</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.username') }}</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter User Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.email') }}</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Enter Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.phone_number') }}</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Phone Number" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>Role</label>
                                                    <select class="select">
                                                        <option>{{ __('messages.select_role') }}</option>
                                                        <option>Role 1</option>
                                                        <option>Role 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group" id="3">
                                                    <div class="input-block">
                                                        <label>{{ __('messages.password') }}</label>
                                                        <input type="password" class="form-control pass-input"
                                                            placeholder="">
                                                        <span class="toggle-password feather-eye"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group" id="passwordInput2">
                                                    <div class="input-block">
                                                        <label>{{ __('messages.confirm_password') }}</label>
                                                        <input type="password" class="form-control pass-input"
                                                            placeholder="">
                                                        <span class="toggle-password feather-eye"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block ">
                                                    <label>{{ __('messages.status') }}</label>
                                                    <select class="select">
                                                        <option>{{ __('messages.select_status') }}</option>
                                                        <option>{{ __('messages.active') }}</option>
                                                        <option>{{ __('messages.inactive') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-back cancel-btn me-2">{{ __('messages.cancel') }}</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary paid-continue-btn">{{ __('messages.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add User -->

    <!-- Add User -->
    <div class="modal custom-modal modal-lg fade" id="edit_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">{{ __('messages.edit_user') }}</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="users.html#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="form-groups-item">
                                        <h5 class="form-title">{{ __('messages.profile_picture') }}</h5>
                                        <div class="profile-picture">
                                            <div class="upload-profile">
                                                <div class="profile-img">
                                                    <img id="blah" class="avatar"
                                                        src="assets/img/profiles/avatar-14.jpg" alt="profile-img">
                                                </div>
                                                <div class="add-profile">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <label class="avatar avatar-xxl profile-cover-avatar"
                                                        for="avatar_upload">
                                                        <div class="img-upload">
                                                            <br>
                                                            <label class="btn btn-upload">
                                                                {{ __('messages.upload') }} <input name="photo"
                                                                    type="file" id="avatar_upload">
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.first_name') }}</label>
                                                    <input type="text" value="John" class="form-control"
                                                        placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.last_activity') }}</label>
                                                    <input type="text" class="form-control" value="Smith"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.username') }}</label>
                                                    <input type="text" class="form-control" value="John Smith"
                                                        placeholder="Enter User Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.email') }}</label>
                                                    <input type="email" class="form-control" value="john@example.com"
                                                        placeholder="Enter Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>{{ __('messages.phone_number') }}</label>
                                                    <input type="text" class="form-control" value="+1 989-438-3131"
                                                        placeholder="Enter Phone Number" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>Role</label>
                                                    <select class="select">
                                                        <option>{{ __('messages.select_role') }}</option>
                                                        <option selected>Role 1</option>
                                                        <option>Role 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group" id="passwordInput1">
                                                    <div class="input-block">
                                                        <label>{{ __('messages.password') }}</label>
                                                        <input type="password" class="form-control pass-input"
                                                            value="12345678" placeholder="">
                                                        <span class="toggle-password feather-eye"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group" id="passwordInput4">
                                                    <div class="input-block">
                                                        <label>{{ __('messages.confirm_password') }}</label>
                                                        <input type="password" class="form-control pass-input"
                                                            value="12345678" placeholder="">
                                                        <span class="toggle-password feather-eye"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block ">
                                                    <label>{{ __('messages.status') }}</label>
                                                    <select class="select">
                                                        <option>{{ __('messages.select_status') }}</option>
                                                        <option selected>{{ __('messages.active') }}</option>
                                                        <option>{{ __('messages.cancel') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-primary paid-cancel-btn me-2">{{ __('messages.cancel') }}</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary paid-continue-btn">{{ __('messages.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit User -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>{{ __('messages.delete_user') }}</h3>
                        <p>{{ __('messages.sure') }}</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="users.html#"
                                    class="btn btn-primary paid-continue-btn">{{ __('messages.delete') }}</a>
                            </div>
                            <div class="col-6">
                                <a href="users.html#" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">{{ __('messages.cancel') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->
@endsection
