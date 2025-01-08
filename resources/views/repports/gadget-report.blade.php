@extends('layouts.master', [
    'title' => 'Gadget repport',
])

@push('csss')
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="03622cd9b4cb51f6971db4e9-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Expense Report</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                </a>
                            </li>
                            <li class="">
                                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="download">
                                    <a href="expense-report.html#" class="btn-filters" data-bs-toggle="dropdown"
                                        aria-expanded="false"><span><i class="fe fe-download"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="d-block">
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download><i
                                                        class="far fa-file-pdf me-2"></i>PDF</a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download><i
                                                        class="far fa-file-text me-2"></i>CVS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="print"><span><i class="fe fe-printer"></i></span>
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
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Company Name</th>
                                            <th>Amount</th>
                                            <th>Payment Status</th>
                                            <th>Category</th>
                                            <th>Created By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="contact-details.html"
                                                        class="avatar avatar-sm me-2 subscription-img"><img
                                                            class="avatar-img rounded-circle subscription-circle"
                                                            src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                                    <a href="{{ url('profile') }}">Orn LLC <span><span class="__cf_email__"
                                                                data-cfemail="1f706d715f7a677e726f737a317c7072">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>$199.99</td>
                                            <td><span class="badge bg-success-light text-success-light">Paid</span>
                                            </td>
                                            <td>Marketing</td>
                                            <td>01 Aug 2023, 04:35 PM</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{ url('profile') }}"
                                                        class="avatar avatar-sm me-2 subscription-img"><img
                                                            class="avatar-img rounded-circle subscription-circle"
                                                            src="assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                    <a href="{{ url('profile') }}">Accent Technology<span><span
                                                                class="__cf_email__"
                                                                data-cfemail="fe9f9d9d9b908abe9b869f938e929bd09d9193">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>$99.99</td>
                                            <td><span class="badge bg-success-light text-success-light">Paid</span>
                                            </td>
                                            <td>Software</td>
                                            <td>05 Aug 2023, 07:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="contact-details.html"
                                                        class="avatar avatar-sm me-2 subscription-img"><img
                                                            class="avatar-img rounded-circle subscription-circle"
                                                            src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    <a href="{{ url('profile') }}">Express Advertising<span><span
                                                                class="__cf_email__"
                                                                data-cfemail="b8ddc0c8caddcbcbf8ddc0d9d5c8d4dd96dbd7d5">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>$300.00</td>
                                            <td><span class="badge bg-success-light text-success-light">Paid</span>
                                            </td>
                                            <td>Advertising</td>
                                            <td>13 Aug 2023, 06:35 PM</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="contact-details.html"
                                                        class="avatar avatar-sm me-2 subscription-img"><img
                                                            class="avatar-img rounded-circle subscription-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="{{ url('profile') }}">Lexicon Technologies<span><span
                                                                class="__cf_email__"
                                                                data-cfemail="88e4edf0e1ebe7e6c8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>$690.00</td>
                                            <td><span class="badge bg-warning-light text-warning-light">Pending</span>
                                            </td>
                                            <td>Software</td>
                                            <td>15 Aug 2022, 03:30 PM</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="contact-details.html"
                                                        class="avatar avatar-sm me-2 subscription-img"><img
                                                            class="avatar-img rounded-circle subscription-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="{{ url('profile') }}">Sumo Soft Limited<span><span
                                                                class="__cf_email__"
                                                                data-cfemail="c5b6b0a8aa85a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>$99.99</td>
                                            <td><span class="badge bg-warning-light text-warning-light">Pending</span>
                                            </td>
                                            <td>Stationery</td>
                                            <td>16 Aug 2022, 05:15 PM</td>
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
                <a href="expense-report.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="expense-report.html#" autocomplete="off">
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
                                                    <span class="checkmark"></span> Orn LLC
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Accent Technology
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Express Advertising
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Lexicon Technologies
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Sumo Soft Limited
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Repair Group Co
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

                    <!-- Category -->
                    <div class="accordion" id="accordionMain4">
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
                                <div id="checkBoxes4">
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
                                                    <span class="checkmark"></span> Stationary
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

                    <!-- By Status -->
                    <div class="accordion accordion-last" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Payment Status
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
    <!--/Add Asset -->

    <!-- Add Vendor Modal -->
    <div class="modal custom-modal fade" id="add_vendor" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Vendor</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="input-block mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="input-block mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="input-block mb-3">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="input-block mb-0">
                                <label>Closing Balance</label>
                                <input type="number" class="form-control" placeholder="Enter Closing Balance Amount">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="expense-report.html#" data-bs-dismiss="modal"
                        class="btn btn-back cancel-btn me-2">Cancel</a>
                    <a href="expense-report.html#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add
                        Vendor</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Vendor Modal -->

    <!-- Edit Vendor Modal -->
    <div class="modal custom-modal fade" id="edit_vendor" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Vendor</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" value="John Smith" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" value="john@example.com"
                                    placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" value="+1 989-438-3131"
                                    placeholder="Enter Reference Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-0">
                                <label>Balance</label>
                                <input type="text" class="form-control" value="$4200"
                                    placeholder="Enter Reference Number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="expense-report.html#" data-bs-dismiss="modal"
                        class="btn btn-primary paid-cancel-btn me-2">Cancel</a>
                    <a href="expense-report.html#" data-bs-dismiss="modal"
                        class="btn btn-primary paid-continue-btn">Update</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Vendor Modal -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Vendor</h3>
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
