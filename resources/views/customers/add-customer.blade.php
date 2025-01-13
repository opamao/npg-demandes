@extends('layouts.master', [
    'title' => 'Add Customer',
])

@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Intl Tell Input CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intlTelInput/css/intlTelInput.css">
@endpush

@push('scripts')
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('') }}assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Intl Tell Input js -->
    <script src="{{ URL::asset('') }}assets/plugins/intlTelInput/js/intlTelInput-jquery.min.js"></script>
@endpush

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            @include('layouts.status')
            <div class="card mb-0">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>{{ __('messages.add_customer') }}</h5>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group-item">
                                    <h5 class="form-title">{{ __('messages.basic_detail') }}</h5>
                                    <div class="profile-picture">
                                        <div class="upload-profile">
                                            <div class="profile-img">
                                                <img id="blah" class="avatar" src="assets/img/profiles/avatar-14.jpg"
                                                    alt="profile-img">
                                            </div>
                                            <div class="add-profile">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                                                    <div class="img-upload">
                                                        <br>
                                                        <label class="btn btn-upload">
                                                            {{ __('messages.upload') }} <input name="photo" type="file"
                                                                id="avatar_upload">
                                                        </label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>Code <span class="text-danger">*</span></label>
                                                <input required name="code" type="text" class="form-control"
                                                    placeholder="Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.username') }} <span
                                                        class="text-danger">*</span></label>
                                                <input required name="username" type="text" class="form-control"
                                                    placeholder="{{ __('messages.username') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.name') }} <span class="text-danger">*</span></label>
                                                <input required name="name" type="text" class="form-control"
                                                    placeholder="{{ __('messages.name') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.email') }}</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="{{ __('messages.email') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.phone') }}</label>
                                                <input type="number" id="mobile_code" class="form-control"
                                                    placeholder="{{ __('messages.phone') }}" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.website') }}</label>
                                                <input type="text" class="form-control" name="website"
                                                    placeholder="{{ __('messages.website') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.password') }} <span
                                                        class="text-danger">*</span></label>
                                                <input required type="password" class="form-control"
                                                    placeholder="{{ __('messages.password') }}" name="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.confirm_password') }} <span
                                                        class="text-danger">*</span></label>
                                                <input required type="password" class="form-control"
                                                    placeholder="{{ __('messages.confirm_password') }}" name="cpassword">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="input-block mb-3">
                                                <label>{{ __('messages.currency') }} <span
                                                        class="text-danger">*</span></label>
                                                <select name="currency" required class="select">
                                                    <option value="">{{ __('messages.select_currency') }}</option>
                                                    <option value="xof">XOF</option>
                                                    <option value="$">$</option>
                                                    <option value="€">€</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-customer-btns text-end">
                                    <a href="javascript:history.back()"
                                        class="btn customer-btn-cancel">{{ __('messages.cancel') }}</a>
                                    <button type="submit" class="btn customer-btn-save">{{ __('messages.add') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
