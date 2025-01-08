@extends('layouts.master', [
    'title' => 'Customers',
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
    <script src="{{ URL::asset('') }}assets/plugins/datatables/datatables.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>

    <!-- select CSS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery-ui.min.js" type="ada0f6fa314471a24691a5ff-text/javascript"></script>
@endpush


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Customers</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Filter"><span class="me-2"><img
                                            src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter
                                </a>
                            </li>
                            <li>
                                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Download">
                                    <a href="customers.html#" class="btn-filters" data-bs-toggle="dropdown"
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
                                    data-bs-placement="bottom" title="Print"><span><i class="fe fe-printer"></i></span>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-import" href="javascript:void(0);"><span><i
                                            class="fe fe-check-square me-2"></i>Import Customer</span></a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ url('add-customer') }}"><i
                                        class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Customer</a>
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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Balance </th>
                                            <th>Total Invoice </th>
                                            <th>Created</th>
                                            <th>Status</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-md me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Pricilla Maureen <span><span
                                                                class="__cf_email__"
                                                                data-cfemail="88f8fae1ebe1e4e4e9c8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 707-439-1732</td>
                                            <td>$2,763</td>
                                            <td>4</td>
                                            <td>20 Nov 2022, 02:47 PM</td>
                                            <td><span class="badge bg-danger-light">Deactive</span></td>
                                            <td class="d-flex align-items-center">
                                                <a href="add-invoice.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-plus-circle me-1"></i> Invoice</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customers.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="{{url('edit-customer')}}"><i
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
                                                                <a class="dropdown-item" href="active-customers.html"><i
                                                                        class="fa-solid fa-power-off me-2"></i>Activate</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i
                                                                        class="far fa-bell-slash me-2"></i>Deactivate</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-md me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Randall Hollis <span><span class="__cf_email__"
                                                                data-cfemail="3547545b5154595975504d54584559501b565a58">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 559-741-9672</td>
                                            <td>$4,642</td>
                                            <td>1</td>
                                            <td>15 Nov 2022, 10:42 AM</td>
                                            <td><span class="badge  bg-success-light">Active</span></td>
                                            <td class="d-flex align-items-center">
                                                <a href="add-invoice.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-plus-circle me-1"></i> Invoice</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customers.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="{{url('edit-customer')}}"><i
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
                                                                <a class="dropdown-item" href="active-customers.html"><i
                                                                        class="fa-solid fa-power-off me-2"></i>Activate</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i
                                                                        class="far fa-bell-slash me-2"></i>Deactivate</a>
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

    <!-- Add Asset -->
    <div class="toggle-sidebar ledge">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header ledge">
                <h5>PayIn</h5>
                <a href="customers.html#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-header submenu">
                <h6>Test Company</h6>
                <p class="text-success-light">Balance: $400</p>
            </div>
            <div class="sidebar-body">
                <form action="customers.html#" autocomplete="off">
                    <!-- Customer -->
                    <div class="accordion accordion-last" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Customers
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
                                                    <span class="checkmark"></span> Johnny Charles
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Robert George
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Sharonda Letha
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Pricilla Maureen
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Randall Hollis
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
                    <div class="accordion" id="accordionMain2">
                        <div class="col-lg-12 col-sm-12">
                            <div class="input-block mb-3">
                                <label>Enter Amount</label>
                                <input type="text" class="form-control" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Payment Date</label>
                                <div class="cal-icon cal-icon-info">
                                    <input type="text" class="datetimepicker form-control" placeholder="Select Date">
                                </div>
                            </div>
                        </div>
                        <div class="input-block mb-3 notes-form-group-info">
                            <label>Notes</label>
                            <textarea class="form-control" placeholder="Enter your notes"></textarea>
                        </div>
                        <div class="modal-footer">
                            <a href="customers.html#" data-bs-dismiss="modal"
                                class="btn btn-back cancel-btn me-2">Cancel</a>
                            <a href="customers.html#" data-bs-dismiss="modal"
                                class="btn btn-primary paid-continue-btn">Add Payment</a>
                        </div>
                    </div>
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
                        <h3>Delete Customer</h3>
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
