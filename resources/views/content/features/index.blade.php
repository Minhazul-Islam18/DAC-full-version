@php
    $pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap-iconpicker.min.css') }}" />
@endsection

@section('vendor-script')
    <script src=""></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <!-- jQuery CDN -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <!-- Bootstrap CDN -->
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <!-- Bootstrap-Iconpicker Bundle -->
    <script type="text/javascript" src="{{ asset('assets/dist/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-features.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Homepage</a>
                    </li>
                    <li class="breadcrumb-item active">Features</li>
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
    <!-- Bordered Table -->
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="m-0">Featured Items</h5>
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#features"> Create </button> --}}
            <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                aria-controls="offcanvasEnd">
                Add features
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Add features</h5>
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
                                data-icon="fas fa-wifi" role="iconpicker" data-search="true" data-search-text="Search..."
                                data-placement="bottom"></button>
                            <span style="color:gray;">NB: Select the dropdown sign to select an icon</span>
                        </div>
                        <div class="form-floating col-12">
                            <input type="text" id="floatingInput" name="" class="form-control"
                                placeholder="Enter Title">
                            <label for="floatingInput">Title*</label>
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="modalEditUserFirstName">Color*</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                value="#fff" title="Choose your color">
                        </div>
                        <div class="form-floating col-12">
                            <input type="text" id="floatingInput" name="modalEditUserName" class="form-control"
                                placeholder="Serial number" />
                            <label for="floatingInput">Serial Number</label>
                            <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the
                                later the feature will be shown.</span>
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
                            <th>Serial Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><strong>Angular Project</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i></td>
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
                        <tr>
                            <td><strong>React Project</strong></td>
                            <td><i class="fab fa-react fa-lg text-info me-3"></i></td>
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
                        <tr>
                            <td><strong>VueJs Project</strong></td>
                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i></td>
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
                        <tr>
                            <td><strong>Bootstrap Project</strong></td>
                            <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i></td>
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

    {{-- <div class="row mb-4">
    <div class="col-3 form-group">
        <label>Default</label>
        <span>
            <i id="icond" class=""></i>
        </span>
        <input class="form-control icp icp-auto" value="fas fa-anchor" type="text"/>
    </div>
</div> --}}

    <!-- All Modals -->
    {{-- @include('_partials/_modals/modal-features') --}}
@endsection
