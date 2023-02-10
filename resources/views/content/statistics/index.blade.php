@php
    $pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="https://itsjavi.com/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <!-- Bootstrap CDN -->
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <!-- Bootstrap-Iconpicker Bundle -->
<script type="text/javascript" src="{{ asset('assets/dist/js/bootstrap-iconpicker.bundle.min.js') }}"></script>@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-statistics.js') }}"></script>
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Homepage</a>
                    </li>
                    <li class="breadcrumb-item active">Statistics</li>
                </ol>
            </nav>
        </div>
        <div class="col-3">
            <form action="" method="POST">
                <select name="lang" id="lang" class="form-select">
                    <optgroup>
                        <option value="" selected>Language</option>
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </optgroup>
                </select>
            </form>
        </div>
    </div>
    <div class="card py-4 mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-md-12 ps-3 mb-3 p-0">
                            <form action="" method="post">
                                <label for="filepond"></label>
                                <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                    data-max-files="3" />
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                required>
                                            <label for="floatingInput">Upload button text *</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                required>
                                            <label for="floatingInput">Upload button URL *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                required>
                                            <label for="floatingInput">Download button text *</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                required>
                                            <label for="floatingInput">Download button URL *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <input class="success" type="submit" value="Update!">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bordered Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="m-0">Statistics</h5>
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#features"> Create </button> --}}
            <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                aria-controls="offcanvasEnd">
                Add Statistic
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Statistics</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form id="editUserForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                            <select name="lang" id="lang" class="form-select">
                                <optgroup>
                                    <option value="" selected>Language</option>
                                    <option value="en">English</option>
                                    <option value="ar">Arabic</option>
                                    <option value="fr">French</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-12 d-flex flex-column align-items-start">
                            <span>ICON *</span>
                            <button class="btn btn-secondary"
                                data-iconset="glyphicon|ionicon|fontawesome4|fontawesome5|weathericon|mapicon|octicon|typicon|elusiveicon|flagicon"
                                data-icon="fas fa-wifi" role="iconpicker" data-search="true"
                                data-search-text="Search..." data-placement="bottom"></button>
                            <span style="color:gray;">NB: Select the dropdown sign to select an icon</span>
                        </div>
                        <div class="form-floating col-12 col-md-12">
                            <input type="text" id="floatingInput" name="modalEditUserFirstName" class="form-control"
                                placeholder="Enter title" />
                            <label for="floatingInput">Title*</label>
                        </div>
                        <div class="form-floating col-12 col-md-12">
                            <input type="text" id="floatingInput" name="modalEditUserFirstName" class="form-control"
                                placeholder="Enter quantity" />
                            <label for="floatingInput">Quantity*</label>
                        </div>

                        <div class="form-floating col-12">
                            <input type="text" id="floatingInput" name="modalEditUserName" class="form-control"
                                placeholder="8" />
                            <label for="floatingInput">Serial Number</label>
                            <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the
                                feature will be shown.</span>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary"
                                data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Quantity</th>
                            <th>Serial Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><strong>Angular Project</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i></td>
                            <td>1258</td>
                            <td>
                                54687431
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->

    <!-- All Modals -->
    {{-- @include('_partials/_modals/modal-statistics') --}}
@endsection
