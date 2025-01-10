@extends('layouts.master', [
    'title' => 'Customers',
])
@push('scripthaut')
    <script data-cfasync="false"
        src="{{ URL::asset('') }}assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
@endpush
@push('csss')
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

    <!-- select CSS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- multiselect JS -->
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
                <div class="content-page-header">
                    <h5>{{ __('messages.customers') }}</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-import" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#import_customer"><span><i
                                            class="fe fe-upload me-2"></i>{{ __('messages.import_customer') }}</span></a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ url('add-customer') }}"><i
                                        class="fa fa-plus-circle me-2" aria-hidden="true"></i>
                                    {{ __('messages.add_customer') }} </a>
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
                                <label>{{ __('messages.last_name') }}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>{{ __('messages.email') }}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>{{ __('messages.phone') }}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="super-admin-list-head">
                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="grid-info-item total-items">
                                    <div class="grid-info">
                                        <span>{{ __('messages.total_customer') }}</span>
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
                                        <span>{{ __('messages.active_customer') }}</span>
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
                                        <span>{{ __('messages.inactive_customer') }}</span>
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
                                        <span>{{ __('messages.customer_online') }}</span>
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
                                            <th>{{ __('messages.last_name') }}</th>
                                            <th>{{ __('messages.phone') }}</th>
                                            <th>{{ __('messages.balance') }} </th>
                                            <th>{{ __('messages.total_invoice') }} </th>
                                            <th>{{ __('messages.created') }}</th>
                                            <th>{{ __('messages.status') }}</th>
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
                                                    <a href="profile.html">Pricilla Maureen <span><span class="__cf_email__"
                                                                data-cfemail="88f8fae1ebe1e4e4e9c8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 707-439-1732</td>
                                            <td>$2,763</td>
                                            <td>4</td>
                                            <td>20 Nov 2022, 02:47 PM</td>
                                            <td><span class="badge bg-danger-light">{{ __('messages.deactive') }}</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="{{ url('customer-details') }}" class="btn btn-greys me-2"><i
                                                        class="fa fa-plus-circle me-1"></i>
                                                    {{ __('messages.invoice') }}</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customers.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ url('edit-customer') }}"><i
                                                                        class="far fa-edit me-2"></i>{{ __('messages.edit') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>{{ __('messages.delete') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>{{ __('messages.view') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="active-customers.html"><i
                                                                        class="fa-solid fa-power-off me-2"></i>{{ __('messages.active') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i
                                                                        class="far fa-bell-slash me-2"></i>{{ __('messages.deactive') }}</a>
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
                                            <td><span class="badge  bg-success-light">{{ __('messages.active') }}</span>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a href="{{ url('customer-details') }}" class="btn btn-greys me-2"><i
                                                        class="fa fa-plus-circle me-1"></i>
                                                    {{ __('messages.invoice') }}</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="customers.html#" class=" btn-action-icon "
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ url('edit-customer') }}"><i
                                                                        class="far fa-edit me-2"></i>{{ __('messages.edit') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>{{ __('messages.delete') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="customer-details.html"><i
                                                                        class="far fa-eye me-2"></i>{{ __('messages.view') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="active-customers.html"><i
                                                                        class="fa-solid fa-power-off me-2"></i>{{ __('messages.active') }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="deactive-customers.html"><i
                                                                        class="far fa-bell-slash me-2"></i>{{ __('messages.deactive') }}</a>
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

    <div class="modal custom-modal modal-lg fade" id="import_customer" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">{{ __('messages.import_customer') }}</h4>
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

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>{{ __('messages.delete_customer') }}</h3>
                        <p>{{ __('messages.sure') }}</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="reset" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-continue-btn">{{ __('messages.delete') }}</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-cancel-btn">{{ __('messages.cancel') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->
@endsection
