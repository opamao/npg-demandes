@extends('layouts.master', [
    'title' => 'Companies',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">
@endpush

<!-- jQuery -->
@push('scripthaut')
    <script data-cfasync="false"
        src="{{ URL::asset('') }}assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush

@push('scripts')
    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>

    <!-- select CSS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery-ui.min.js" type="ba5bf2421c25651cf11e389d-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Companies</h5>
                    <div class="page-content">
                        <div class="list-btn">
                            <ul class="filter-list">
                                <li>
                                    <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Refresh"><span><i
                                                class="fe fe-refresh-ccw"></i></span></a>
                                </li>
                                <li>
                                    <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                                src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                    </a>
                                </li>

                                <li>
                                    <div class="dropdown dropdown-action" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Download">
                                        <a href="companies.html#" class="btn btn-filters" data-bs-toggle="dropdown"
                                            aria-expanded="false"><span class="me-2"><i
                                                    class="fe fe-download"></i></span>Export</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="d-block">
                                                <li>
                                                    <a class="d-flex align-items-center download-item"
                                                        href="javascript:void(0);" download><i
                                                            class="far fa-file-pdf me-2"></i>Export as PDF</a>
                                                </li>
                                                <li>
                                                    <a class="d-flex align-items-center download-item"
                                                        href="javascript:void(0);" download><i
                                                            class="far fa-file-text me-2"></i>Export as Excel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Print"><span class="me-2"><i
                                                class="fe fe-printer"></i></span> Print
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="companies.html#" data-bs-toggle="modal"
                                        data-bs-target="#add_companies"><i class="fa fa-plus-circle me-2"
                                            aria-hidden="true"></i>Add Company</a>
                                </li>
                            </ul>
                        </div>
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
                                        <span>Total Companies</span>
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
                                        <span>Active Companies</span>
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
                                        <span>Inactive Company</span>
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
                                        <span>Company Locations</span>
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

            <!-- Search Filter -->
            <div id="filter_inputs" class="card filter-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="companies-table">
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th Class="no-sort">#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Account URL</th>
                                                <th>Plan</th>
                                                <th>Change Plan</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                                <th Class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html"
                                                            class="company-avatar avatar-md me-2 companies company-icon">
                                                            <img class="avatar-img rounded-circle company"
                                                                src="assets/img/companies/company-09.svg"
                                                                alt="Company Image"></a>
                                                        <a href="companies.html#">Global tech</a>
                                                    </h2>
                                                </td>
                                                <td><a href="https://kanakku.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="334640564101000773564b525e435f561d505c5e">[email&#160;protected]</a>
                                                </td>
                                                <td>global.example.com</td>
                                                <td>Free (Monthly)</td>
                                                <td><a href="companies.html#" data-bs-toggle="modal"
                                                        data-bs-target="#change_pane"><span
                                                            class="badge bg-purple">Change</span></a></td>
                                                <td>15 Feb 2024</td>
                                                <td><span
                                                        class="badge bg-success-light d-inline-flex align-items-center"><i
                                                            class="fe fe-check me-1"></i>Active</span></td>
                                                <td class="d-flex align-items-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="companies.html#" class=" btn-action-icon "
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="dropdown-ul">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#view_companies"><i
                                                                            class="far fa-eye me-2"></i>View
                                                                        Company</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_companies"><i
                                                                            class="fe fe-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li class="delete-alt">
                                                                    <div>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#delete_modal"><i
                                                                                class="fe fe-trash-2 me-2"></i>Delete</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-user-x me-2"></i>Cancel
                                                                        Plan</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-shuffle me-2"></i>Subscription
                                                                        Log</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html"
                                                            class="company-avatar avatar-md me-2 companies company-icon">
                                                            <img class="avatar-img rounded-circle company"
                                                                src="assets/img/companies/company-10.svg"
                                                                alt="Company Image"></a>
                                                        <a href="companies.html#">High Tech Lead</a>
                                                    </h2>
                                                </td>
                                                <td><a href="https://kanakku.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="49282a2a263c273d3a092c31282439252c672a2624">[email&#160;protected]</a>
                                                </td>
                                                <td>high.example.com</td>
                                                <td>Enterprise (Monthly)</td>
                                                <td><a href="companies.html#" data-bs-toggle="modal"
                                                        data-bs-target="#change_pane"><span
                                                            class="badge bg-purple">Change</span></a></td>
                                                <td>15 Feb 2024</td>
                                                <td><span class="badge bg-danger-light d-inline-flex align-items-center"><i
                                                            class="fe fe-x me-1"></i>Inactive</span></td>
                                                <td class="d-flex align-items-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="companies.html#" class=" btn-action-icon "
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="dropdown-ul">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#view_companies"><i
                                                                            class="far fa-eye me-2"></i>View
                                                                        Company</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_companies"><i
                                                                            class="fe fe-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li class="delete-alt">
                                                                    <div>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#delete_modal"><i
                                                                                class="fe fe-trash-2 me-2"></i>Delete</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-user-x me-2"></i>Cancel
                                                                        Plan</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="fe fe-shuffle me-2"></i>Subscription
                                                                        Log</a>
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
    </div>
    <!-- /Page Wrapper -->

    <!-- Add Asset -->
    <div class="toggle-sidebar">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header">
                <h5>Filter</h5>
                <a href="companies.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="companies.html#" autocomplete="off">
                    <!-- Customer -->
                    <div class="accordion" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Company Name
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample1">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="form-custom">
                                                <input type="text" class="form-control member-search-dropdown"
                                                    id="member_search1" placeholder="Search Company">
                                                <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                            </div>
                                            <div class="selectBox-cont search-dropdown-item">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Hermann Groups
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Skiles LLC
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Kerluke Group
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span>Schowalter Group
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Accentric Global
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Dexter Matrix
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Emporis Technologies
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span>High Tech Lead
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span> Beacon Softwares
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus">
                                                    <span class="checkmark"></span>Global tech
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Customer -->

                    <!-- By Plane -->
                    <div class="accordion" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Plans
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample3">
                            <div class="card-body-chat">
                                <div id="checkBoxes2">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> All Plans
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Advanced
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Basic
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Enterprise
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span>Premium
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span>Free
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Plane -->

                    <!-- By Plane -->
                    <div class="accordion" id="accordionMain4">
                        <div class="card-header-new" id="headingFour">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Plans Type
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample4">
                            <div class="card-body-chat">
                                <div id="checkBoxes2">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> All Plan Type
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Monthly
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Weekly
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span>Lifetime
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Plane -->

                    <!-- Select Date -->
                    <div class="accordion accordion-last" id="accordionMain2">
                        <div class="card-header-new" id="headingTwo">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Select Date
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample2">
                            <div class="card-body-chat">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">From</label>
                                    <div class="cal-icon">
                                        <input type="email" class="form-control datetimepicker"
                                            placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="form-control-label">To</label>
                                    <div class="cal-icon">
                                        <input type="email" class="form-control datetimepicker"
                                            placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Select Date -->



                    <div class="filter-buttons">
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                            Apply
                        </button>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
                            Reset
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--/Add Asset -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade modal-delete" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <div class="delete-modal-icon">
                            <span><i class="fe fe-check-circle"></i></span>
                        </div>
                        <h3>Are You Sure?</h3>
                        <p>You want delete company</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="modal-footer justify-content-center p-0">
                            <button type="submit" data-bs-dismiss="modal"
                                class="btn btn-primary paid-continue-btn me-2">Yes, Delete</button>
                            <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn">No,
                                Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->

    <!-- Add Companies Modal -->
    <div class="modal custom-modal custom-lg-modal fade p-20" id="add_companies" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add New Company</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="companies.html">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-field-item">
                                    <h5 class="form-title">Company Profile</h5>
                                    <div class="profile-picture">
                                        <div class="upload-profile">
                                            <div class="profile-img company-profile-img">
                                                <img id="company-img" class="img-fluid me-0"
                                                    src="assets/img/companies/company-add-img.svg" alt="profile-img">
                                            </div>
                                            <div class="add-profile">
                                                <h5>Upload a New Photo</h5>
                                                <span>Profile-pic.jpg</span>
                                            </div>
                                        </div>
                                        <div class="img-upload">
                                            <label class="btn btn-upload">
                                                Upload <input type="file">
                                            </label>
                                            <a class="btn btn-remove">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="form-label">Name </label>
                                    <input type="text" class="form-control" placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Email Address </label>
                                    <input type="text" class="form-control" placeholder="Enter Company Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Account Url </label>
                                    <div class="url-text-box">
                                        <input type="text" class="form-control" placeholder="Account URL">
                                        <span class="url-text">kanakku.com</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="mb-2">Phone Number</label>
                                    <input class="form-control" id="phone" name="phone" type="text"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Website </label>
                                    <input type="text" class="form-control" placeholder="Enter Website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group modal-password-field">
                                        <input type="password" class="form-control pass-input" placeholder="Password">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Confirm Password</label>
                                    <div class="pass-group modal-password-field">
                                        <input type="password" class="form-control pass-input-two"
                                            placeholder="Confirm Password">
                                        <span class="fas toggle-password-two fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="form-label">Company Address </label>
                                    <textarea type="text" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Plan Name</label>
                                    <select class="select">
                                        <option>Select Plan</option>
                                        <option>All Plans</option>
                                        <option>Advanced</option>
                                        <option>Basic</option>
                                        <option>Enterprise</option>
                                        <option>Premium</option>
                                        <option>Free</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Plan Type</label>
                                    <select class="select">
                                        <option>Select Plan Type</option>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                        <option>Lifetime</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Select Currency</label>
                                    <select class="select">
                                        <option>Select Currency</option>
                                        <option>₹</option>
                                        <option>$</option>
                                        <option>£</option>
                                        <option>€</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Select Language</label>
                                    <select class="select">
                                        <option>Select language</option>
                                        <option>English</option>
                                        <option>French</option>
                                        <option>Spanish</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Status</h6>
                                    <div class="status-toggle">
                                        <input id="access-trail" class="check" type="checkbox" checked="">
                                        <label for="access-trail" class="checktoggle checkbox-bg">checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-back cancel-btn me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add
                            New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Companies Modal -->

    <!-- Edit Companies Modal -->
    <div class="modal custom-modal custom-lg-modal fade p-20" id="edit_companies" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Company</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="companies.html">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-field-item">
                                    <h5 class="form-title">Company Profile</h5>
                                    <div class="profile-picture">
                                        <div class="upload-profile">
                                            <div class="profile-img company-profile-img">
                                                <img id="edit-company-img" class="img-fluid me-0"
                                                    src="assets/img/companies/company-01.svg" alt="profile-img">
                                            </div>
                                            <div class="add-profile">
                                                <h5>Upload a New Photo</h5>
                                                <span>Profile-pic.jpg</span>
                                            </div>
                                        </div>
                                        <div class="img-upload">
                                            <label class="btn btn-upload">
                                                Upload <input type="file">
                                            </label>
                                            <a class="btn btn-remove">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="form-label">Name </label>
                                    <input type="text" class="form-control" placeholder="Enter Company Name"
                                        value="Hermann Groups">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Email Address </label>
                                    <input type="text" class="form-control" placeholder="Enter Company Email"
                                        value="info@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Account Url </label>
                                    <div class="url-text-box">
                                        <input type="text" class="form-control" placeholder="Account URL"
                                            value="www.hru.example.com">
                                        <span class="url-text">kanakku.com</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="mb-2">Phone Number</label>
                                    <input class="form-control" id="phone_2" name="phone" type="text"
                                        placeholder="Phone Number" value="1245547887">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-label">Website </label>
                                    <input type="text" class="form-control" placeholder="Enter Website"
                                        value="www.example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group modal-password-field">
                                        <input type="password" class="form-control pass-input" placeholder="Password"
                                            value="12345">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Confirm Password</label>
                                    <div class="pass-group modal-password-field">
                                        <input type="password" class="form-control pass-input-two"
                                            placeholder="Confirm Password" value="12345">
                                        <span class="fas toggle-password-two fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="form-label">Company Address </label>
                                    <textarea type="text" class="form-control" rows="3">22 Junior Avenue Duluth, GA 30097</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Plan Name</label>
                                    <select class="select">
                                        <option>All Plans</option>
                                        <option>Advanced</option>
                                        <option>Basic</option>
                                        <option>Enterprise</option>
                                        <option>Premium</option>
                                        <option>Free</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Plan Type</label>
                                    <select class="select">
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                        <option>Lifetime</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Select Currency</label>
                                    <select class="select">
                                        <option>United Stated Dollar (USD)</option>
                                        <option>$</option>
                                        <option>£</option>
                                        <option>€</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label>Select Language</label>
                                    <select class="select">
                                        <option>English</option>
                                        <option>French</option>
                                        <option>Spanish</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Status</h6>
                                    <div class="status-toggle">
                                        <input id="access-trail-2" class="check" type="checkbox" checked="">
                                        <label for="access-trail-2" class="checktoggle checkbox-bg">checkbox</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal"
                            class="btn btn-back cancel-btn me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save
                            Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Companies Modal -->

    <!-- View Companies Modal -->
    <div class="modal custom-modal custom-lg-modal fade p-20" id="view_companies" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Company Details</h4>
                    </div>
                    <div class="d-flex details-edit-link">
                        <a href="companies.html#" class="modal-edit-link d-flex align-items-center"
                            data-bs-toggle="modal" data-bs-target="#edit_companies"><i
                                class="fe fe-edit me-2"></i>Edit Company</a>
                        <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>

                </div>
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-field-item">
                                <div class="profile-picture company-detail-head">
                                    <div class="upload-profile">
                                        <div class="profile-img company-profile-img">
                                            <img id="view-company-img" class="img-fluid me-0"
                                                src="assets/img/companies/company-01.svg" alt="profile-img">
                                        </div>
                                        <div class="add-profile">
                                            <h5>Hermann Groups</h5>
                                            <span><a href="https://kanakku.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="a0e8c5d2cdccccd2c9c3c8e0c5d8c1cdd0ccc58ec3cfcd">[email&#160;protected]</a></span>
                                        </div>
                                    </div>
                                    <span class="badge bg-success-light d-inline-flex align-items-center"><i
                                            class="fe fe-check me-1"></i>Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="plane-basic-info">
                                <h5>Basic Info</h5>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Account URL</h6>
                                            <p>hru.example.com</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Phone Number</h6>
                                            <p>+1 15541 54544</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Website</h6>
                                            <p>www.example.com</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Company Address</h6>
                                            <p>22 Junior Avenue <br>Duluth, GA 30097</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Currency</h6>
                                            <p>United Stated Dollar (USD)</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Language</h6>
                                            <p>English</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="plane-basic-info plane-detail">
                                <h5>Plan Details</h5>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Plan Name</h6>
                                            <p>Enterprise</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Plan Type</h6>
                                            <p>Yearly</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Price</h6>
                                            <p>$200</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Register Date</h6>
                                            <p>15 Jan 2024</p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="basic-info-detail">
                                            <h6>Expiring On</h6>
                                            <p>15 Jan 2025</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /View Companies Modal -->

    <!-- Change Plane Modal -->
    <div class="modal custom-modal custom-lg-modal fade p-20" id="change_pane" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Update Package</h4>
                    </div>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close">
                    </button>

                </div>
                <form action="companies.html#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="plane-basic-info plane-detail">
                                    <h5>Current Plan Details</h5>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Company Name</h6>
                                                <p>Hermann Groups</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Plan Name</h6>
                                                <p>Enterprise</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Plan Type</h6>
                                                <p>Yearly</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Price</h6>
                                                <p>$200</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Register Date</h6>
                                                <p>15 Jan 2024</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="basic-info-detail">
                                                <h6>Expiring On</h6>
                                                <p>15 Jan 2025</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="plane-basic-info plane-detail">
                                    <h5>Change Company Plan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Plan Name</label>
                                                <select class="select">
                                                    <option>Enterprise</option>
                                                    <option>Advanced</option>
                                                    <option>Basic</option>
                                                    <option>Premium</option>
                                                    <option>Free</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label>Plan Type</label>
                                                <select class="select">
                                                    <option>Yearly</option>
                                                    <option>Monthly</option>
                                                    <option>Lifetime</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="form-label">Amount </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="form-control-label">Payment Date</label>
                                                <div class="cal-icon">
                                                    <input type="email" class="form-control datetimepicker"
                                                        placeholder="DD-MM-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="form-control-label">Next Payment Date</label>
                                                <div class="cal-icon">
                                                    <input type="email" class="form-control datetimepicker"
                                                        placeholder="DD-MM-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="form-control-label">Expiring On</label>
                                                <div class="cal-icon">
                                                    <input type="email" class="form-control datetimepicker"
                                                        placeholder="DD-MM-YYYY">
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
                            class="btn btn-back cancel-btn me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save
                            Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /Change Plane Modal -->
@endsection
