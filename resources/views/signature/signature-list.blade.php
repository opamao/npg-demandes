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
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <!-- select CSS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- multiselect JS -->
    <script src="assets/js/jquery-ui.min.js"></script>
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            @include('layouts.status')
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Signature </h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_modal"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>
                                    {{ __('messages.add_signature') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="modal custom-modal signature-add-modal fade" id="add_modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <div class="form-header modal-header-title text-start mb-0">
                                <h4 class="mb-0">{{ __('messages.add_signature') }}</h4>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                            </button>
                        </div>
                        <form action="{{ route('signature-list.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-block mb-3">
                                            <label>{{ __('messages.name_signature') }}</label>
                                            <input required name="libelle" type="text" class="form-control"
                                                placeholder="{{ __('messages.name_signature') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-block mb-3">
                                            <label>{{ __('messages.upload') }}</label>
                                            <div class="input-block mb-0">
                                                <span>{{ __('messages.upload_signature') }}</span>
                                                <input type="file" class="form-control" name="signature" required
                                                    accept="image/png, image/jpg">
                                                <div id="frames"></div>
                                            </div>
                                            <p>{{ __('messages.image_signature') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-back me-2">{{ __('messages.cancel') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('messages.add') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center datatable signature-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('messages.name_signature') }}</th>
                                            <th>Signature</th>
                                            <th>{{ __('messages.status') }}</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($signature as $listSigne)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $listSigne->signature_name }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <img class="img-fluid light-color-logo" width="80"
                                                            height="30"
                                                            src="{{ URL::asset('signatures' . '/' . $listSigne->signature) }}"
                                                            alt="User Image">
                                                        <img class="img-fluid dark-white-logo" width="80" height="30"
                                                            src="{{ URL::asset('signatures' . '/' . $listSigne->signature) }}"
                                                            alt="User Image">
                                                    </h2>
                                                </td>
                                                <td>
                                                    <div class="status-toggle">
                                                        <input id="rating_2" class="check" type="checkbox">
                                                    </div>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <a class=" btn-action-icon me-2" href="javascript:void(0);"
                                                        data-bs-toggle="tooltip" title="{{ __('messages.make_default') }}"
                                                        data-bs-placement="left"><i class="fe fe-star"></i></a>
                                                    <a class=" btn-action-icon me-2" href="javascript:void(0);"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit_modal{{ $listSigne->id }}"><i
                                                            class="fe fe-edit"></i></a>
                                                    <!-- Edit Modal -->
                                                    <div class="modal custom-modal signature-add-modal fade"
                                                        id="edit_modal{{ $listSigne->id }}" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0 pb-0">
                                                                    <div
                                                                        class="form-header modal-header-title text-start mb-0">
                                                                        <h4 class="mb-0">
                                                                            {{ __('messages.edit_signature') }}
                                                                        </h4>
                                                                    </div>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close">

                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('signature-list.update', $listSigne->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="input-block mb-3">
                                                                                    <label>{{ __('messages.name_signature') }}</label>
                                                                                    <input name="libelle" required
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        value="{{ $listSigne->signature_name }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-9 col-md-12">
                                                                                <div class="input-block mb-3">
                                                                                    <label>{{ __('messages.upload') }}</label>
                                                                                    <div class="input-block mb-0">
                                                                                        <span>{{ __('messages.upload_signature') }}</span>
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            name="signature"
                                                                                            accept="image/png, image/jpg">
                                                                                        <div id="frames2"></div>
                                                                                    </div>
                                                                                    <p>{{ __('messages.image_signature') }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-12 ps-0">
                                                                                <div class="input-block mb-3">
                                                                                    <label>&nbsp;</label>
                                                                                    <div class="signature-preview">
                                                                                        <img src="{{ URL::asset('signatures' . '/' . $listSigne->signature) }}"
                                                                                            class="img-fluid"
                                                                                            alt="img">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="javascript:void(0);"
                                                                            data-bs-dismiss="modal"
                                                                            class="btn btn-back me-2">{{ __('messages.cancel') }}</a>
                                                                        <a href="javascript:void(0);"
                                                                            data-bs-dismiss="modal"
                                                                            class="btn btn-primary">{{ __('messages.upload') }}</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / Edit Modal -->
                                                    <a class=" btn-action-icon" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#warning_modal"><i
                                                            class="fe fe-trash-2"></i></a>
                                                    <!-- Delete Items Modal -->
                                                    <div class="modal custom-modal fade signature-delete-modal"
                                                        id="warning_modal" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered modal-md">
                                                            <div class="modal-content">
                                                                <form
                                                                    action="{{ route('signature-list.destroy', $listSigne->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-body">
                                                                        <div class="form-header">
                                                                            <div class="mb-2"><i
                                                                                    class="fe fe-alert-circle text-warning"></i>
                                                                            </div>
                                                                            <h3>{{ __('messages.are_sure') }}</h3>
                                                                            <p>{{ __('messages.you_this') }}</p>
                                                                        </div>
                                                                        <div
                                                                            class="modal-btn delete-action text-center modal-footer pb-0 justify-content-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary me-2">{{ __('messages.yes_delete') }}</button>
                                                                            <button type="reset" data-bs-dismiss="modal"
                                                                                class="btn btn-back">{{ __('messages.cancel') }}</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Delete Items Modal -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
