@extends('layouts.master', [
    'title' => 'Edit product',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.css">
@endpush
@push('scripts')
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('') }}assets/js/feather.min.js" type="93eedfc166ccac8cc644cd10-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js" type="93eedfc166ccac8cc644cd10-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="93eedfc166ccac8cc644cd10-text/javascript"></script>

    <!-- Moment JS -->
    <script src="{{ URL::asset('') }}assets/plugins/moment/moment.min.js" type="93eedfc166ccac8cc644cd10-text/javascript"></script>

    <!-- Summernote JS -->
    <script src="{{ URL::asset('') }}assets/plugins/summernote/summernote-lite.min.js" type="93eedfc166ccac8cc644cd10-text/javascript"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>Edit Products / Services</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group-item">
                                <h5 class="form-title">Basic Details</h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Item Type<span class="text-danger"> *</span></label>
                                            <div class="align-center">
                                                <div class="form-control me-3">
                                                    <label class="custom_radio me-3 mb-0">
                                                        <input type="radio" class="form-control" name="payment" checked>
                                                        <span class="checkmark"></span> Product
                                                    </label>
                                                </div>
                                                <div class="form-control">
                                                    <label class="custom_radio mb-0">
                                                        <input type="radio" name="payment">
                                                        <span class="checkmark"></span> Service
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Product Name <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Product Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3 add-products">
                                            <label>Product Code (SKU)<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Product Code">
                                            <button type="submit" class="btn btn-primary">
                                                Generate Code
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Category <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Selling Price <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Selling Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Purchase Price <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Purchase Prices">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Quantity <span class="text-danger"> *</span></label>
                                            <input type="number" class="form-control" placeholder="Enter Quantity"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Units</label>
                                            <select class="select">
                                                <option>Select Units</option>
                                                <option>Pieces</option>
                                                <option>Box</option>
                                                <option>Kilograms</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Discount Type</label>
                                            <select class="select">
                                                <option>Select Discount Type</option>
                                                <option>Percentage</option>
                                                <option>Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3 add-products">
                                            <label>Generate Barcode</label>
                                            <input type="text" class="form-control" placeholder="Enter Barcode Code">
                                            <button type="submit" class="btn btn-primary">
                                                Generate Code
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Alert Quantity </label>
                                            <input type="number" class="form-control" placeholder="Enter Alert Quantity"
                                                name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="input-block mb-3">
                                            <label>Tax</label>
                                            <select class="select">
                                                <option>Select Tax</option>
                                                <option>IVA - (21%)</option>
                                                <option>IRPF - (-15%)</option>
                                                <option>PDV - (20%)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 description-box">
                                        <div class="input-block mb-3" id="summernote_container">
                                            <label class="form-control-label">Product Descriptions</label>
                                            <textarea class="summernote form-control" placeholder="Type your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="input-block mb-3">
                                            <label>Product Image</label>
                                            <div class="input-block mb-3 service-upload mb-0">
                                                <span><img src="assets/img/icons/drop-icon.svg" alt="upload"></span>
                                                <h6 class="drop-browse align-center">
                                                    Drop your files here or<span class="text-primary ms-1">browse</span>
                                                </h6>
                                                <p class="text-muted">Maximum size: 50MB</p>
                                                <input type="file" multiple="" id="image_sign">
                                                <div id="frames"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="product-list.html" class="text-end">
                                <button type="reset" class="btn btn-primary cancel me-2">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Add Item
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
