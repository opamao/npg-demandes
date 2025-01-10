@extends('layouts.master', [
    'title' => 'Signature',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>

    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>

    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="d4a5c0a2d38543753ea32dd5-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Signature </h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_modal"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add
                                    Signature</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center datatable signature-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Signature Name</th>
                                            <th>Signature</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Allen</td>
                                            <td>
                                                <div class="table-avatar">
                                                    <img class="img-fluid light-color-logo" width="80" height="30"
                                                        src="assets/img/user-signature.png" alt="User Image">
                                                    <img class="img-fluid dark-white-logo" width="80" height="30"
                                                        src="assets/img/user-signature-white.png" alt="User Image">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input id="rating_1" class="check" type="checkbox" checked="">
                                                    <label for="rating_1" class="checktoggle checkbox-bg">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon active me-2" href="javascript:void(0);"
                                                    data-bs-toggle="tooltip" title="Remove default"
                                                    data-bs-placement="left"><i class="fe fe-star"></i></a>
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                        class="fe fe-edit"></i></a>
                                                <a class=" btn-action-icon" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#warning_modal"><i
                                                        class="fe fe-trash-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Raymond</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <img class="img-fluid light-color-logo" width="80" height="30"
                                                        src="assets/img/user-signature.png" alt="User Image">
                                                    <img class="img-fluid dark-white-logo" width="80" height="30"
                                                        src="assets/img/user-signature-white.png" alt="User Image">
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input id="rating_2" class="check" type="checkbox">
                                                    <label for="rating_2" class="checktoggle checkbox-bg">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);"
                                                    data-bs-toggle="tooltip" title="Make as default"
                                                    data-bs-placement="left"><i class="fe fe-star"></i></a>
                                                <a class=" btn-action-icon me-2" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#edit_modal"><i
                                                        class="fe fe-edit"></i></a>
                                                <a class=" btn-action-icon" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#warning_modal"><i
                                                        class="fe fe-trash-2"></i></a>
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

    <!-- Add Modal -->
    <div class="modal custom-modal signature-add-modal fade" id="add_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Signature</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="signature-list.html#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Signature Name</label>
                                    <input type="text" class="form-control" placeholder="Signature Name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Upload</label>
                                    <div class="input-block service-upload service-upload-info mb-0">
                                        <span><i class="fe fe-upload-cloud me-1"></i>Upload Signature</span>
                                        <input type="file" multiple="">
                                        <div id="frames"></div>
                                    </div>
                                    <p>Image format should be png and jpg</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label class="custom_check">
                                    <input type="checkbox" name="invoice">
                                    <span class="checkmark"></span>
                                    Mark as default
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- / Add Modal -->

    <!-- Edit Modal -->
    <div class="modal custom-modal signature-add-modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Signature</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Signature Name</label>
                                <input type="text" class="form-control" value="Shirley">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="input-block mb-3">
                                <label>Upload</label>
                                <div class="input-block service-upload service-upload-info mb-0">
                                    <span><i class="fe fe-upload-cloud me-1"></i>Upload Signature</span>
                                    <input type="file" multiple="">
                                    <div id="frames2"></div>
                                </div>
                                <p>Image format should be png and jpg</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 ps-0">
                            <div class="input-block mb-3">
                                <label>&nbsp;</label>
                                <div class="signature-preview">
                                    <a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a>
                                    <img src="assets/img/edit-signature.png" class="img-fluid" alt="img">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label class="custom_check">
                                <input type="checkbox" name="invoice">
                                <span class="checkmark"></span>
                                Mark as default
                            </label>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-back me-2">Cancel</a>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">Update</a>
                </div>
            </div>
        </div>
    </div>
    <!-- / Edit Modal -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade signature-delete-modal" id="warning_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <div class="mb-2"><i class="fe fe-alert-circle text-warning"></i></div>
                        <h3>Are you Sure?</h3>
                        <p>You won’t be able to revert this!</p>
                    </div>
                    <div class="modal-btn delete-action text-center modal-footer pb-0 justify-content-center">
                        <button type="reset" data-bs-toggle="modal" data-bs-target="#delete_modal"
                            class="btn btn-primary me-2">Yes, delete it!</button>
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-back">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade signature-delete-modal" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <div class="mb-2"><i class="fe fe-trash-2"></i></div>
                        <h3>Signature Deleted</h3>
                        <p>The signature deleted successfully!</p>
                    </div>
                    <div class="modal-btn delete-action text-center">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-primary">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->
@endsection
