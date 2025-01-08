@extends('layouts.master', [
    'title' => 'Invoices',
])

@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripthaut')
    <!-- jQuery -->
    <script data-cfasync="false"
        src="{{ URL::asset('') }}assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>

    <!-- select CSS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery-ui.min.js" type="7ea142cd14fc031f3038cc1b-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Invoices</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ url('add-invoice') }}"><i class="fa fa-plus-circle me-2"
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
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
                                    <li><a href="{{ url('invoices') }}" class="active">All</a></li>
                                    <li><a href="{{ url('invoices-paid') }}">Paid</a></li>
                                    <li><a href="{{ url('invoices-overdue') }}">Overdue</a></li>
                                    <li><a href="{{ url('invoices-cancelled') }}">Cancelled</a></li>
                                    <li><a href="{{ url('invoices-recurring') }}">Partially Paid</a></li>
                                    <li><a href="{{ url('invoices-unpaid') }}">Unpaid</a></li>
                                    <li><a href="{{ url('invoices-refunded') }}">Refunded</a></li>
                                    <li><a href="{{ url('invoices-draft') }}">Draft</a></li>
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
                            <div class="table-responsive">
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
                                                <a href="invoice-details.html" class="invoice-link">#4987</a>
                                            </td>
                                            <td>Advertising</td>
                                            <td>23 Mar 2023</td>
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
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$0</td>
                                            <td>-</td>
                                            <td><span class="badge bg-success-light">Paid</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="btn-action-icon" data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="{{ url('edit-invoice') }}"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="{{ url('invoice-details') }}"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4988</a>
                                            </td>
                                            <td>Food</td>
                                            <td>16 Mar 2023</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Johnny <span>+1 917-409-0861</span></a>
                                                </h2>
                                            </td>
                                            <td>$3,54,220</td>
                                            <td>$2,50,000</td>
                                            <td>Cheque</td>
                                            <td>$4,220</td>
                                            <td>16 Jan 2023</td>
                                            <td><span class="badge bg-warning-light text-warning">Overdue</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4989</a>
                                            </td>
                                            <td>Marketing</td>
                                            <td>25 Feb 2023</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Robert <span>+1 956-623-2880</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>16 Jan 2023</td>
                                            <td><span class="badge bg-danger-light">Cancelled</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4990</a>
                                            </td>
                                            <td>Repairs</td>
                                            <td>25 Mar 2023</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Sharonda <span>+1
                                                            707-439-1732</span></a>
                                                </h2>
                                            </td>
                                            <td>$1,54,220</td>
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>12 May 2023</td>
                                            <td><span class="badge bg-primary-light">Partially Paid</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4991</a>
                                            </td>
                                            <td>Software</td>
                                            <td>12 May 2022</td>
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
                                            <td>18 May 2022</td>
                                            <td><span class="badge bg-light-gray text-secondary">Unpaid</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-copy me-2"></i>Clone as Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="invoice">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="invoice-details.html" class="invoice-link">#4992</a>
                                            </td>
                                            <td>Stationary</td>
                                            <td>16 Nov 2022</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Randall <span>+1
                                                            989-438-3131</span></a>
                                                </h2>
                                            </td>
                                            <td>$5,54,220</td>
                                            <td>$6,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>25 Feb 2022</td>
                                            <td><span class="badge bg-info-lights">Refunded</span></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="invoices.html#" class="btn-action-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <a class="dropdown-item" href="edit-invoice.html"><i
                                                                class="far fa-edit me-2"></i>Edit</a>
                                                        <a class="dropdown-item" href="invoice-details.html"><i
                                                                class="far fa-eye me-2"></i>View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_modal"><i
                                                                class="far fa-eye me-2"></i>View Delivery
                                                            Challans</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-send me-2"></i>Send</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
                                                                class="fe fe-download me-2"></i>Download</a>
                                                        <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                class="fe fe-file-text me-2"></i>Convert to Sales
                                                            Return</a>
                                                        <a class="dropdown-item" href="invoices.html"><i
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
                <a href="invoices.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="invoices.html#" autocomplete="off">
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
                                                <input type="text" class="form-control" id="member_search"
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
                                    <h6 class="mb-1">Invoice # : <span> INV-1</span></h6>
                                    <h6 class="mb-1">Invoice Date :<span> 07-10-2023</span></h6>
                                    <p>Due Date : <span>07-12-2023</span></p>
                                </div>

                            </div>
                            <span class="line my-4"></span>
                            <div class="patient-infos">
                                <div class="row">
                                    <div class="col-sm-4">
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
                                                            data-cfemail="9afefff6f3ecffdaffe2fbf7eaf6ffb4f9f5f7">[email&#160;protected]</a></span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
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
                                    <div class="col-sm-4">
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
                            <a href="invoices.html#">
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
                        <h3>Delete Invoice</h3>
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
