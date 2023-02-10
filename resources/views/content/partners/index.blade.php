@php
    $pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('assets/dist/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-partners.js') }}"></script>
    <script src="{{ asset('assets/js/dt-noFilter.js') }}"></script>
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
                    <li class="breadcrumb-item active">Partners</li>
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
    <div class="card py-4 my-3">
        <div class="card-header">
            <h6>Title & Subtitle</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 ps-3 mb-3 p-0">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter Title"
                                        required>
                                    <label for="floatingInput">Title *</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Enter sub-title" required>
                                    <label for="floatingInput">Sub-titile *</label>
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
    <!--  Table -->
    <div class="card py-3">
        <div class="container">
            <table id="dataTable" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Partners name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Partners name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <h6>LiveWire <sub>[ID: 001]</sub> </h6>
                        </td>
                        <td>
                            <img class="rounded-circle" src="https://placehold.co/50x50" alt="">
                        </td>
                        <td>
                            <span class="badge bg-label-success m-0">Active</span>
                        </td>
                        <td>3</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <i class="bx bx-edit mx-1"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Move to Trash"
                                    data-bs-original-title="Move to Trash">
                                    <i class="bx bx-trash mx-1"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;" class="dropdown-item">Download</a><a href="invoice/edit"
                                            class="dropdown-item">Edit</a><a href="javascript:;"
                                            class="dropdown-item">Duplicate</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    {{-- offCanvas --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Partners</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="editUserForm" class="row g-3" onsubmit="return false">
                <div class="col-12">
                    <label class="mb-2" for="filepond"></label>
                    <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                        data-max-files="3" />
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                        allowed.</span>
                </div>
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
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Enter name">
                    <label for="floatingInput">Name *</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Enter url">
                    <label for="floatingInput">URL *</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Select Status</option>
                        <option value="0">Publish</option>
                        <option value="1">Unpublish</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="6">
                    <label for="floatingInput">Serial number</label>
                    <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the
                        feature will be shown.</span>
                </div>

                <div class="col-12 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
