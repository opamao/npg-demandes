@extends('layouts.master', [
    'title' => 'Invoice draft',
])

@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="9563ab8358bb636a58314460-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Invoices Draft</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Settings"><span><i class="fe fe-settings"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Grid-View"><span><i class="fe fe-grid"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="active btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="List-View"><span><i class="fe fe-list"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="add-invoice.html"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>New Invoice</a>
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

            <!-- Inovices card -->
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-info-light">
                                    <img src="assets/img/icons/receipt-item.svg" alt="invoice">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Total Invoice</div>
                                    <div class="dash-counts">
                                        <p>$298</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">02</span>
                                </p>
                                <p class="inovice-trending text-success-light">02 <span class="ms-2"><i
                                            class="fe fe-trending-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-primary-light">
                                    <img src="assets/img/icons/transaction-minus.svg" alt="invoice">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Outstanding</div>
                                    <div class="dash-counts">
                                        <p>$325,215</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">03</span>
                                </p>
                                <p class="inovice-trending text-success-light">04 <span class="ms-2"><i
                                            class="fe fe-trending-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-warning-light">
                                    <img src="assets/img/icons/archive-book.svg" alt="archivebook">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Total Overdue</div>
                                    <div class="dash-counts">
                                        <p>$7825</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">01</span>
                                </p>
                                <p class="inovice-trending text-danger-light">03 <span class="ms-2"><i
                                            class="fe fe-trending-down"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-primary-light">
                                    <img src="assets/img/icons/clipboard-close.svg" alt="clipboard">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Cancelled</div>
                                    <div class="dash-counts">
                                        <p>100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">04</span>
                                </p>
                                <p class="inovice-trending text-danger-light">05 <span class="ms-2"><i
                                            class="fe fe-trending-down"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-green-light">
                                    <img src="assets/img/icons/message-edit.svg" alt="message">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Draft</div>
                                    <div class="dash-counts">
                                        <p>$125,586</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">06</span>
                                </p>
                                <p class="inovice-trending text-danger-light">02 <span class="ms-2"><i
                                            class="fe fe-trending-down"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div class="card inovices-card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-danger-light">
                                    <img src="assets/img/icons/3d-rotate.svg" alt="invoice">
                                </span>
                                <div class="dash-count">
                                    <div class="dash-title">Recurring</div>
                                    <div class="dash-counts">
                                        <p>$86,892</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">03</span>
                                </p>
                                <p class="inovice-trending text-success-light">02 <span class="ms-2"><i
                                            class="fe fe-trending-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Inovices card -->

            <!-- All Invoice -->
            <div class="card invoices-tabs-card">
                <div class="invoices-main-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="invoices-tabs">
                                <ul>
                                    <li><a href="{{ url('invoices') }}">All</a></li>
                                    <li><a href="{{ url('invoices-paid') }}">Paid</a></li>
                                    <li><a href="{{ url('invoices-overdue') }}">Overdue</a></li>
                                    <li><a href="{{ url('invoices-cancelled') }}">Cancelled</a></li>
                                    <li><a href="{{ url('invoices-recurring') }}">Partially Paid</a></li>
                                    <li><a href="{{ url('invoices-unpaid') }}">Unpaid</a></li>
                                    <li><a href="{{ url('invoices-refunded') }}">Refunded</a></li>
                                    <li><a href="{{ url('invoices-draft') }}" class="active">Draft</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /All Invoice -->

            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive no-pagination">
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>Invoice ID
                                            </th>
                                            <th>Category</th>
                                            <th>Created On</th>
                                            <th>Invoice To</th>
                                            <th>Total</th>
                                            <th>Paid</th>
                                            <th>Payment Mode</th>
                                            <th>Balance</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4991</a>
                                            </td>
                                            <td>Software</td>
                                            <td>12 May 2023</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Pricilla <span>+1
                                                            559-741-9672</span></a>
                                                </h2>
                                            </td>
                                            <td>$5,54,220</td>
                                            <td>$3,50,000</td>
                                            <td>Cheque</td>
                                            <td>$4,220</td>
                                            <td>18 May 2023</td>
                                            <td><span class="badge bg-light-gray text-secondary">Draft</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices-draft.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices-draft.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices-draft.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices-draft.html"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
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
                <a href="invoices-draft.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="invoices-draft.html#" autocomplete="off">
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
                                                <input type="text" class="form-control" id="member_search"
                                                    placeholder="Search Customer">
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

                    <!-- Invoice Number -->
                    <div class="accordion" id="accordionMain5">
                        <div class="card-header-new" id="headingFive">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Invoice Number
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample5">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes5">
                                            <div class="form-custom">
                                                <input type="text" class="form-control" id="member_search1"
                                                    placeholder="Search Invoice">
                                                <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                            </div>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 4987
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 4988
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 4989
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> 4990
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 4991
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 4992
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> 4993
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
                    <!-- /Invoice Number -->

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
                                            <span class="checkmark"></span> All Invoices
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Paid
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Overdue
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> cancelled
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Partially Paid
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="bystatus">
                                            <span class="checkmark"></span> Unpaid
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
                                            <span class="checkmark"></span> Marketing
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="category">
                                            <span class="checkmark"></span> Repairs
                                        </label>
                                        <!-- View All -->
                                        <div class="view-content">
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Software
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>Stationary
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

    <!-- Delete Paid Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Invoice</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Paid Modal -->
@endsection
