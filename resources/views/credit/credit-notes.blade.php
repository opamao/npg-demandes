@extends('layouts.master', [
    'title' => 'Credit notes',
])
@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="4d055a259e1dda2ae659607a-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Credit Notes</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="Settings"><span><i
                                            class="fe fe-settings"></i></span> </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="add-credit-notes.html"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Credit Notes</a>
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

            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Credit Notes ID</th>
                                            <th>Vendor</th>
                                            <th>Amount</th>
                                            <th>Payment Mode</th>
                                            <th>Created On</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905681</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                                    <a href="profile.html">John Smith <span>+1
                                                            843-443-3282</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td><span class="badge bg-success-light text-success-light">Paid</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    DeliveryChallan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905682</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Johnny <span>+1 917-409-0861</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>15 Dec 2023, 04:35 PM</td>
                                            <td><span class="badge bg-warning-light text-warning-light">Pending</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    DeliveryChallan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905683</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Robert<span>+1 956-623-2880</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td><span class="badge bg-danger-light">Cancelled</span></td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    DeliveryChallan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905684</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Sharonda<span>+1
                                                            707-439-1732</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>28 Nov 2023, 03:25 PM</td>
                                            <td><span class="badge bg-success-light text-success-light">Paid</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to DeliveryChallan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905685</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Pricilla<span>+1
                                                            559-741-9672</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>20 Nov 2022, 02:47 PM</td>
                                            <td><span class="badge bg-warning-light text-warning-light">Pending</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to DeliveryChallan</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <a href="invoice-details.html" class="invoice-link">4905686</a>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Randalll<span>+1
                                                            989-438-3131</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>Cash</td>
                                            <td>15 Nov 2022, 10:42 AM</td>
                                            <td><span class="badge bg-danger-light">Cancelled</span></td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);" download><i
                                                        class="fe fe-download"></i></a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="credit-notes.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right credit-note-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-credit-notes.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="credit-notes.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="add-delivery-challans.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to DeliveryChallan</a>
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
            <!-- /Table -->

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- Add Asset -->
    <div class="toggle-sidebar">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header">
                <h5>Filter</h5>
                <a href="credit-notes.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="credit-notes.html#" autocomplete="off">
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

                    <!-- Product Code -->
                    <div class="accordion" id="accordionMain2">
                        <div class="card-header-new" id="headingTwo">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Credit Notes ID
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample2">
                            <div class="card-body-chat">
                                <div id="checkBoxes3">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ref-no">
                                            <span class="checkmark"></span> 4905681
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ref-no">
                                            <span class="checkmark"></span> 4905682
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ref-no">
                                            <span class="checkmark"></span> 4905683
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ref-no">
                                            <span class="checkmark"></span> 4905684
                                        </label>
                                        <!-- View All -->
                                        <div class="view-content">
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="ref-no">
                                                    <span class="checkmark"></span> 4905685
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="ref-no">
                                                    <span class="checkmark"></span> 4905686
                                                </label>
                                            </div>
                                            <div class="view-all">
                                                <a href="javascript:void(0);" class="viewall-button-Two"><span
                                                        class="me-2">View All</span><span><i
                                                            class="fa fa-circle-chevron-down"></i></span></a>
                                            </div>
                                        </div>
                                        <!-- /View All -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Code -->

                    <!-- By Status -->
                    <div class="accordion" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    By Status
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
                                            <span class="checkmark"></span> Paid
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Pending
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Cancelled
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Status -->

                    <!-- By Status -->
                    <div class="accordion accordion-last" id="accordionMain4">
                        <div class="card-header-new" id="headingFour">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Payment Mode
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample3">
                            <div class="card-body-chat">
                                <div id="checkBoxes2">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="payment-mode">
                                            <span class="checkmark"></span> Cash
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="payment-mode">
                                            <span class="checkmark"></span> Cheque
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Status -->

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
    <!-- /Add Asset -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Credit Notes</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="reset" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-continue-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->
@endsection