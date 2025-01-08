@extends('layouts.master',[
    'title' => 'Edit delivery'
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
@endpush
@push('scripts')
    <!-- Datatable JS -->
    <script src="assets/plugins/datatables/datatables.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js" type="d580c975c82636ba0b1798d0-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>Edit Delivery Challans</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="delivery-card">
                                <div class="form-group-item border-0 mb-0">
                                    <div class="row align-item-center">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Delivery Challan Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Delivery Challan Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Customer Name</label>
                                                <ul class="form-group-plus css-equal-heights">
                                                    <li>
                                                        <select class="select">
                                                            <option>Choose Customer</option>
                                                            <option>Customer 1</option>
                                                            <option>Customer 2</option>
                                                            <option>Customer 3</option>
                                                        </select>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-primary form-plus-btn" href="add-customer.html"><i
                                                                class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Delivery Challan Date</label>
                                                <input type="text" class="datetimepicker form-control"
                                                    placeholder="Select Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Due Date</label>
                                                <input type="text" class="datetimepicker form-control"
                                                    placeholder="Select Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Reference No</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Reference Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-block mb-3">
                                                <label>Products</label>
                                                <ul class="form-group-plus css-equal-heights">
                                                    <li>
                                                        <select class="select">
                                                            <option>Select Product</option>
                                                            <option>Product 1</option>
                                                            <option>Product 2</option>
                                                            <option>Product 3</option>
                                                        </select>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-primary form-plus-btn" href="add-products.html"><i
                                                                class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-item">
                                    <div class="card-table">
                                        <div class="card-body">
                                            <div class="table-responsive no-pagination">
                                                <table class="table table-center table-hover datatable">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product / Service</th>
                                                            <th>Quantity</th>
                                                            <th>Unit</th>
                                                            <th>Rate</th>
                                                            <th>Discount</th>
                                                            <th>Tax</th>
                                                            <th>Amount</th>
                                                            <th class="no-sort">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Lorem ipsum dolor sit amet</td>
                                                            <td><input type="number" class="form-control" placeholder="0">
                                                            </td>
                                                            <td>Pcs</td>
                                                            <td><input type="number" class="form-control"
                                                                    placeholder="120"></td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>$120.00</td>
                                                            <td class="d-flex align-items-center">
                                                                <a href="edit-delivery-challans.html#"
                                                                    class="btn-action-icon me-2" data-bs-toggle="modal"
                                                                    data-bs-target="#add_discount"><span><i
                                                                            class="fe fe-edit"></i></span></a>
                                                                <a href="edit-delivery-challans.html#"
                                                                    class="btn-action-icon" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_discount"><span><i
                                                                            class="fe fe-trash-2"></i></span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="input-block mb-3">
                                                    <label>Discount Type</label>
                                                    <select class="select">
                                                        <option>Percentage(%)</option>
                                                        <option>Fixed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="input-block mb-3">
                                                    <label>Discount(%)</label>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-3">
                                            <label>Tax</label>
                                            <select class="select">
                                                <option>No Tax</option>
                                                <option>IVA - (21%)</option>
                                                <option>IRPF - (-15%)</option>
                                                <option>PDV - (20%)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="form-group-item border-0 p-0">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="form-group-bank">
                                                <div class="row align-items-center">
                                                    <div class="col-md-8">
                                                        <div class="input-block mb-3">
                                                            <label>Select Bank</label>
                                                            <select class="select">
                                                                <option>Select Bank</option>
                                                                <option>SBI</option>
                                                                <option>IOB</option>
                                                                <option>Canara</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-groups">
                                                            <a class="btn btn-primary" href="edit-delivery-challans.html#"
                                                                data-bs-toggle="modal" data-bs-target="#bank_details">Add
                                                                Bank</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-block mb-3  notes-form-group-info">
                                                    <label>Notes</label>
                                                    <textarea class="form-control" placeholder="Enter Notes"></textarea>
                                                </div>
                                                <div class="input-block mb-3  notes-form-group-info mb-0">
                                                    <label>Terms and Conditions</label>
                                                    <textarea class="form-control" placeholder="Enter Terms and Conditions"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="form-group-bank">
                                                <div class="invoice-total-box">
                                                    <div class="invoice-total-inner">
                                                        <p>Taxable Amount <span>$120.00</span></p>
                                                        <p>Discount <span>$13.20</span></p>
                                                        <p>Vat <span>$0.00</span></p>
                                                        <div class="status-toggle justify-content-between">
                                                            <div class="d-flex align-center">
                                                                <p>Round Off </p>
                                                                <input id="rating_1" class="check" type="checkbox"
                                                                    checked="">
                                                                <label for="rating_1"
                                                                    class="checktoggle checkbox-bg">checkbox</label>
                                                            </div>
                                                            <span>$0.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="invoice-total-footer">
                                                        <h4>Total Amount <span>$107.80</span></h4>
                                                    </div>
                                                </div>
                                                <div class="input-block mb-3">
                                                    <label>Signature Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Signature Name">
                                                </div>
                                                <div class="input-block mb-0">
                                                    <label>Signature Image</label>
                                                    <div class="input-block mb-3  service-upload service-upload-info mb-0">
                                                        <span><i class="fe fe-upload-cloud me-1"></i>Upload
                                                            Signature</span>
                                                        <input type="file" multiple="" id="image_sign">
                                                        <div id="frames"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-4">
                                    <a href="delivery-challans.html" class="btn btn-primary cancel me-2">Cancel</a>
                                    <a href="delivery-challans.html" class="btn btn-primary">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- Add Tax & Discount Modal -->
    <div class="modal custom-modal fade" id="add_discount" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Tax & Discount</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Rate</label>
                                <input type="number" class="form-control" placeholder="120">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Discount Amount</label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-0">
                                <label>Tax</label>
                                <select class="select">
                                    <option>N/A</option>
                                    <option>5%</option>
                                    <option>10%</option>
                                    <option>15%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer add-tax-btns">
                    <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                        class="btn add-btn-cancel-btn">Cancel</a>
                    <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                        class="btn btn-primary add-tax-save-btn">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Tax & Discount Modal -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_discount" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 justify-content-center pb-0">
                    <div class="form-header modal-header-title text-center mb-0">
                        <h4 class="mb-2">Delete Product / Services</h4>
                        <p>Are you sure want to delete?</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->

    <!-- Edit Bank Details Modal -->
    <div class="modal custom-modal fade" id="bank_details" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Bank Details</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Bank Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Account Number <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Enter Account Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Branch Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Branch Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-0">
                                <label>IFSC Code <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Enter IFSC COde">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                        class="btn btn-primary paid-cancel-btn me-2">Back</a>
                    <a href="edit-delivery-challans.html#" data-bs-dismiss="modal"
                        class="btn btn-primary paid-continue-btn">Update</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Bank Details Modal -->
@endsection
