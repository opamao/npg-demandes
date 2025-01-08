@extends('layouts.master', [
    'title' => 'Dtails customers',
])
@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripthaut')
    <script data-cfasync="false"
        src="{{ URL::asset('') }}assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>

    <!-- select CSS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery-ui.min.js" type="8aab040fd1782d88093e4f4a-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>{{ __('messages.customer-details') }}</h5>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card customer-details-group">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-img d-inline-flex">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-14.jpg"
                                            alt="profile-img">
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>John Smith</h6>
                                        <p>Cl-12345</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-icon d-inline-flex">
                                        <i class="fe fe-mail"></i>
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>Email Address</h6>
                                        <p><a href="https://kanakku.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="670d080f0927021f060a170b024904080a">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-icon d-inline-flex">
                                        <i class="fe fe-phone"></i>
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>Phone Number</h6>
                                        <p>585-785-4840</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-icon d-inline-flex">
                                        <i class="fe fe-airplay"></i>
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>Company Name</h6>
                                        <p>Kanakku Corporation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-icon d-inline-flex">
                                        <i class="fe fe-globe"></i>
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>Website</h6>
                                        <p class="customer-mail">www.example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="customer-details">
                                <div class="d-flex align-items-center">
                                    <span class="customer-widget-icon d-inline-flex">
                                        <i class="fe fe-briefcase"></i>
                                    </span>
                                    <div class="customer-details-cont">
                                        <h6>Company Address</h6>
                                        <p>4712 Cherry Ridge Drive Rochester, NY 14620.</p>
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

            <!-- Inovices card -->
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="card inovices-card w-100">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="inovices-widget-icon bg-info-light">
                                    <img src="assets/img/icons/receipt-item.svg" alt="img">
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
                                    <img src="assets/img/icons/transaction-minus.svg" alt="img">
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
                                    <img src="assets/img/icons/archive-book.svg" alt="img">
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
                                    <img src="assets/img/icons/clipboard-close.svg" alt="img">
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
                                    <img src="assets/img/icons/message-edit.svg" alt="img">
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
                                    <img src="assets/img/icons/3d-rotate.svg" alt="img">
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
                                                </label>Invoice No
                                            </th>
                                            <th>Category</th>
                                            <th>Created On</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
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
                                            <td>Food</td>
                                            <td>23 Mar 2023</td>
                                            <td>$1,54,220</td>
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$2,54,00</td>
                                            <td>25 Mar 2023</td>
                                            <td><span class="badge bg-success-light">Paid</span></td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert to
                                                                    Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
                                                            </li>
                                                        </ul>
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
                                            <td>Advertising</td>
                                            <td>16 Mar 2023</td>
                                            <td>$3,54,220</td>
                                            <td>$2,50,000</td>
                                            <td>Cheque</td>
                                            <td>$4,220</td>
                                            <td>16 Jan 2023</td>
                                            <td><span class="badge bg-warning-light text-warning">Overdue</span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
                                                            </li>
                                                        </ul>
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
                                            <td>$1,54,220</td>
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>16 Jan 2023</td>
                                            <td><span class="badge bg-danger-light text-danger">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
                                                            </li>
                                                        </ul>
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
                                            <td>$1,54,220</td>
                                            <td>$1,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>12 May 2023</td>
                                            <td><span class="badge bg-primary-light">Partially Paid</span></td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
                                                            </li>
                                                        </ul>
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
                                            <td>$5,54,220</td>
                                            <td>$3,50,000</td>
                                            <td>Cheque</td>
                                            <td>$4,220</td>
                                            <td>18 May 2022</td>
                                            <td><span class="badge bg-light-gray text-secondary">Unpaid</span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
                                                            </li>
                                                        </ul>
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
                                            <td>$5,54,220</td>
                                            <td>$6,50,000</td>
                                            <td>Cash</td>
                                            <td>$4,220</td>
                                            <td>25 Feb 2022</td>
                                            <td><span class="badge bg-light-gray text-primary">Draft</span></td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customer-details.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end customer-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="edit-customer.html"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-send me-2"></i>Send</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-download me-2"></i>Download</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="add-credit-notes.html"><i
                                                                        class="fe fe-file-text me-2"></i>Convert
                                                                    to Sales Return</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="fe fe-copy me-2"></i>Clone as
                                                                    Invoice</a>
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

            <!-- Delete Items Modal -->
            <div class="modal custom-modal fade" id="delete_modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Customer Details</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="customer-details.html#" data-bs-dismiss="modal"
                                            class="btn btn-primary paid-continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="customer-details.html#" data-bs-dismiss="modal"
                                            class="btn btn-primary paid-cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Items Modal -->

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
