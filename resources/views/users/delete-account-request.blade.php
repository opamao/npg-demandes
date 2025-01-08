@extends('layouts.master', [
    'title' => 'Delete account request',
])
@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="241b79e12e589b1ae8114dbe-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Delete Account Request</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

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
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>Requisition Date</th>
                                            <th>Delete Request Date</th>
                                            <th class="no-sort">Actions</th>
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
                                                                data-cfemail="13797c7b7d53766b727e637f763d707c7e">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>28 Sep 2023 16:43PM</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Johnny <span><span class="__cf_email__"
                                                                data-cfemail="e2888d8a8c8c9ba2879a838f928e87cc818d8f">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>12 Dec 2023, 06:12 PM</td>
                                            <td>15 Dec 2023, 06:12 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
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
                                                                data-cfemail="02706d6067707642677a636f726e672c616d6f">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td>08 Dec 2023, 12:38 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Sharonda <span><span class="__cf_email__"
                                                                data-cfemail="ea99828b988584aa8f928b879a868fc4898587">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>14 Dec 2023, 12:38 PM</td>
                                            <td>24 Dec 2023, 12:38 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Pricilla <span><span class="__cf_email__"
                                                                data-cfemail="a2d2d0cbc1cbcecec3e2c7dac3cfd2cec78cc1cdcf">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>12 Dec 2023, 12:38 PM</td>
                                            <td>13 Dec 2023, 12:38 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Randall <span><span class="__cf_email__"
                                                                data-cfemail="80f2e1eee4e1ececc0e5f8e1edf0ece5aee3efed">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td>09 Dec 2023, 12:38 PM</td>
                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delete-account-request.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="delete-account-request.html#" class="btn btn-greys ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#delete_modal">Confirm</a>
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

    <!-- Add Asset -->
    <div class="toggle-sidebar">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header">
                <h5>Filter</h5>
                <a href="delete-account-request.html#" class="sidebar-closes"><i
                        class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="delete-account-request.html#" autocomplete="off">
                    <!-- Customer -->
                    <div class="accordion" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Customer
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
                                                <input type="text" class="form-control" id="member_search1"
                                                    placeholder="Search here">
                                                <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                            </div>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> John Smith
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Johnny
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Robert
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Sharonda
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Pricilla
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Randall
                                                        </label>
                                                    </div>
                                                    <div class="view-all">
                                                        <a href="javascript:void(0);" class="viewall-button-One"><span
                                                                class="me-2">View
                                                                All</span><span><i
                                                                    class="fa fa-circle-chevron-down"></i></span></a>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Customer -->

                    <!-- Select Date -->
                    <div class="accordion" id="accordionMain2">
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

                    <button type="submit"
                        class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                        <span><img src="assets/img/icons/chart.svg" class="me-2" alt="Generate report"></span>Generate
                        report
                    </button>
                </form>

            </div>
        </div>
    </div>
    <!--/Add Asset -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Account Request</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="delete-account-request.html#"
                                    class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="delete-account-request.html#" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->
@endsection
