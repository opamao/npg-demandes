@extends('layouts.master', [
    'title' => 'Delivery',
])

@push('scripthaut')
    <script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>

    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="318a7c22acc83295b19719d7-text/javascript"></script>
@endpush
@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Delivery Challans</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="Filter"></span>Filter
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ url('add-delivery-challans') }}"><i
                                        class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create Delivery
                                    Challan</a>
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
                                            <th>Challan ID</th>
                                            <th>Customer</th>
                                            <th>Amount</th>
                                            <th>Created On</th>
                                            <th class="text-start">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>#4905681</td>
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
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="edit-delivery-challans.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>#4905682</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Johnny <span>+1 917-409-0861</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,222</td>
                                            <td>15 Dec 2023, 04:35 PM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="edit-delivery-challans.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>#4905683</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Robert <span>+1 956-623-2880</span></a>
                                                </h2>
                                            </td>
                                            <td>$3,470</td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="edit-delivery-challans.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>#4905684</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Sharonda <span>+1
                                                            707-439-1732</span></a>
                                                </h2>
                                            </td>
                                            <td>$8,265</td>
                                            <td>28 Nov 2023, 03:25 PM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="edit-delivery-challans.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>#4905685</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Pricilla <span>+1
                                                            559-741-9672</span></a>
                                                </h2>
                                            </td>
                                            <td>$8,265</td>
                                            <td>20 Nov 2022, 02:47 PM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-quotations.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>#4905686</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Randall <span>+1
                                                            989-438-3131</span></a>
                                                </h2>
                                            </td>
                                            <td>$7,862</td>
                                            <td>15 Nov 2022, 10:42 AM</td>
                                            <td class="text-start">
                                                <div class="dropdown dropdown-action">
                                                    <a href="delivery-challans.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-quotations.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                        class="fe fe-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Invoice</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-copy me-2"></i>Clone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
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
                <a href="delivery-challans.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="delivery-challans.html#" autocomplete="off">
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

                    <!-- By Status -->
                    <div class="accordion" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Challan ID
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample3">
                            <div class="card-body-chat">
                                <div id="checkBoxes2">
                                    <div class="form-custom">
                                        <input type="text" class="form-control" id="member_search2"
                                            placeholder="Search here">
                                        <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                    </div>
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905686
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905685
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905684
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905683
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905682
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> #4905681
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /By Status -->

                    <!-- Category -->
                    <div class="accordion accordion-last" id="accordionMain4">
                        <div class="card-header-new" id="headingFour">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Category
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample4">
                            <div class="card-body-chat">
                                <div id="checkBoxes3">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span> Advertising
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span> Food
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span> Repairs
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span> Software
                                        </label>
                                        <!-- View All -->
                                        <div class="view-content">
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Stationary
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Medical
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Designing
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
                    <!-- /Category -->

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

    <!-- View Modal -->
    <div class="modal custom-modal fade" id="view_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content view-delivery-challans">
                <div class="modal-header border-0 pb-0 justify-content-end d-flex align-items-center">
                    <div class="file-link mb-0 ">
                        <button class="download_btn download-link">
                            <i class="fa fa-cloud-download me-1" aria-hidden="true"></i> <span>Download</span>
                        </button>
                        <a href="javascript:window.print()" class="print-link">
                            <i class="fa fa-print me-1" aria-hidden="true"></i> <span class="">Print</span>
                        </a>
                    </div>
                </div>
                <div class="modal-body invoice-one">
                    <div class="invoice-wrapper download_section">
                        <div class="inv-content">
                            <div class="invoice-header p-0">
                                <div class="inv-header-left">
                                    <h4>DELIVERY CHALLAN</h4>
                                    <h5>Dreamguys Technologies Pvt Ltd</h5>
                                    <h6>Mobile 8072687299</h6>
                                </div>
                                <div class="inv-header-right">
                                    <h3 class="mb-3">Delivery Challan</h3>
                                    <h6 class="mb-1">Delivery Challan : <span> #005</span></h6>
                                    <h6 class="mb-1">Delivery Challan Date :<span> 07-10-2023</span></h6>
                                    <p>Due Date : <span>07-12-2023</span></p>
                                </div>

                            </div>
                            <span class="line my-4"></span>
                            <div class="patient-infos">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class=" patient-detailed">
                                            <div class="bill-add">
                                                Customer Details :
                                            </div>
                                            <div class="customer-name">
                                                <h4 class="mb-1">Test Customer</h4>
                                                <h4 class="mb-1">Test Company</h4>
                                                <p><span>GSTIN : ACWR000054321</span></p>
                                                <p><span>Phone Number : +91 1234567890</span></p>
                                                <p><span>Email : <a
                                                            href="https://kanakku.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="3753525b5e415277524f565a475b521954585a">[email&#160;protected]</a></span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class=" patient-detailed">
                                            <div class="bill-add">
                                                Billing Address :
                                            </div>
                                            <div class="add-details">
                                                Walter Roberson <br> 299 Star Trek Drive, Panama City,<br> Florida,
                                                32405,<br> USA
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class=" patient-detailed">
                                            <div class="bill-add">
                                                Shipping Address :
                                            </div>
                                            <div class="add-details">
                                                Walter Roberson <br> 299 Star Trek Drive, Panama City,<br> Florida,
                                                32405,<br> USA
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="reference">
                                    <h4>Reference</h4>
                                    <p>Keep the Delivery Challan for reference in the future. Now it's simple to
                                        create an invoice, download it</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="invoice-table">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr class="ecommercetable">
                                                <th class="table_width_1">#</th>
                                                <th>Item</th>
                                                <th class="text-end">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-start">Accounting Software Maintainence</td>
                                                <td class="text-end">3</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="text-start">Man Power Support</td>
                                                <td class="text-end">1</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="text-start">Transportation Fee</td>
                                                <td class="text-end">2</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="text-start">Spars Replacement Charges</td>
                                                <td class="text-end">5</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="text-start">Materials Handling</td>
                                                <td class="text-end">1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="text-end">Total Quantity : 12</h5>
                                </div>
                            </div>

                            <div class="authorization text-end">
                                <h6>For YOUR BUSINESS NAME</h6>
                                <img src="assets/img/signature.png" class="my-3" alt="signature-img">
                                <h6>Authorized Signatory</h6>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="terms-condition p-0">
                                        <span>Terms & Conditions:</span>
                                        <ol>
                                            <li>This is a GST based invoice bill, Which is applicable for TDS
                                                Deduction</li>
                                            <li>We are not the manufactures, company will stand for warranty as per
                                                their terms and conditions.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center powered">
                            <h6 class="mt-4 mb-3">Powered By</h6>
                            <a href="delivery-challans.html#">
                                <img class="logo-lightmode" src="assets/img/logo.png" alt="Logo">
                                <img class="logo-darkmode" src="assets/img/logo-white.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Modal -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Delivery Challans</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="delivery-challans.html#" class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="delivery-challans.html#" data-bs-dismiss="modal"
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
