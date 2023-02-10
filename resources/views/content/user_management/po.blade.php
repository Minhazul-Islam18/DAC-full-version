@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
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
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/user-management.js') }}"></script>
@endsection

@section('content')

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Session</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Total Users</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Active PO</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Last week analytics </small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Approved PO</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Pending PO</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-user-voice bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card py-4">
        <!-- Begin Content		-->
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter packages">
                    <div class="title-filter">
                        <select id="" name="countryFilter" class="countryFilter form-select">
                            <option value="" selected>Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                        </select>
                    </div>
                    <div class="">
                        <select name="sectorFilter" id="sectorFilter" class="form-select sectorFilter">
                            <option value="" selected>Supervising ministries</option>
                            <option value="">Health Ministry</option>
                        </select>
                    </div>
                    <div class="">
                        <select name="planFilter" id="planFilter" class="form-select planFilter">
                            <option value="" selected>Select Plan</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Status</option>
                            <option value="Active">Pending</option>
                            <option value="Processing">Processing</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                            <option value="Suspended">Suspended</option>
                        </select>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover dt-responsive" id="dataTablePOlist">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Subscribers(Users)</th>
                        <th scope="col">Supervising ministries</th>
                        <th scope="col">Plan (Package)</th>
                        <th scope="col">Profile completion</th>
                        <th scope="col">Account Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Subscribers(Users)</th>
                        <th scope="col">Supervising ministries</th>
                        <th scope="col">Plan (Package)</th>
                        <th scope="col">Profile completion</th>
                        <th scope="col">Account Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/7.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a>
                                    <a href="javascript:void(0)">
                                        <small class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailNotConfirmed">zmcclevertye@soundcloud.com</small>
                                    </a>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxxxxxxxx</span>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-select bg-success text-dark"
                                style="color: #000 !important">
                                <option value="Active">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Approved" selected>Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </td>
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
                                <a href="{{ route('po-view-account') }}" class="text-body" aria-label="Move to Trash">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/7.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a>
                                    <a href="javascript:void(0)">
                                        <small class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailNotConfirmed">zmcclevertye@soundcloud.com</small>
                                    </a>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxxxxxxxx</span>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-select bg-primary text-dark"
                                style="color: #000 !important">
                                <option value="Active">Pending</option>
                                <option value="Processing" selected>Processing</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </td>
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
                                <a href="{{ route('po-view-account') }}" class="text-body" aria-label="Move to Trash">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/7.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a>
                                    <a href="javascript:void(0)">
                                        <small class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailNotConfirmed">zmcclevertye@soundcloud.com</small>
                                    </a>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxxxxxxxx</span>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-select bg-warning  text-dark"
                                style="color: #000 !important">
                                <option value="Active" selected>Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </td>
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
                                <a href="{{ route('po-view-account') }}" class="text-body" aria-label="Move to Trash">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/7.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-warning badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a>
                                    <a href="javascript:void(0)">
                                        <small class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    </a>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxxxxxxxx</span>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-select bg-danger text-dark"
                                style="color: #000 !important">
                                <option value="Active">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected" selected>Rejected</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                        </td>
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
                                <a href="{{ route('po-view-account') }}" class="text-body" aria-label="Move to Trash">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/7.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a>
                                    <a href="javascript:void(0)">
                                        <small class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    </a>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxxxxxxxx</span>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select name="" id="" class="form-select bg-warning text-dark"
                                style="color: #000 !important">
                                <option value="Active">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Suspended" selected>Suspended</option>
                            </select>
                        </td>
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
                                <a href="{{ route('po-view-account') }}" class="text-body" aria-label="Move to Trash">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    {{-- <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-warning badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small class="text-danger" data-bs-toggle="modal"
                                        data-bs-target="#userPOmailNotConfirmed">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <span class="badge bg-label-info">IA Technology</span>
                                <span class="badge bg-white text-secondary badge-notifications">3</span>
                            </a>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">78%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">Inactive</span></td>
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
                                <a href="javascript:void(0);" class="text-body" aria-label="Move to Trash"
                                    >
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3"><img src="{{ asset('assets/img/avatars/9.png') }}"
                                            alt="Avatar" class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small class="text-success" data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <span class="badge bg-label-info">Mining Industry</span>
                                <span class="badge bg-white text-secondary badge-notifications">2</span>
                            </a>
                        </td>
                        <td>Enterprise</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">52%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 52%" aria-valuenow="52%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
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
                                <a href="javascript:void(0);" class="text-body" aria-label="Move to Trash"
                                    >
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
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
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small class="text-success" data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <span class="badge bg-label-info">IA Technology</span>
                                <span class="badge bg-white text-secondary badge-notifications">4</span>
                            </a>
                        </td>
                        <td>Business</td>
                        <td>
                            <div class="d-flex flex-column"><small class="mb-1">28%</small>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-danger" style="width: 28%" aria-valuenow="28%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">Suspended</span></td>
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
                                <a href="javascript:void(0);" class="text-body" aria-label="Move to Trash"
                                    >
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a href="javascript:;" class="dropdown-item">Download</a><a href="invoice/edit"
                                            class="dropdown-item">Edit</a><a href="javascript:;"
                                            class="dropdown-item">Duplicate</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addData" aria-labelledby="addDataLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add PO</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            @foreach ($countryData as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Select Country</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            <option value="">Ministry of Health</option>
                        </select>
                        <label for="floatingSelect">Select Supervising Ministry</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Full name">
                            <label for="floatingInput">PO. Service Name</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Company name">
                            <label for="floatingInput">PO. Full Name</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Address</label>
                    </div>
                </div>

                <div class="my-3">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Telephone number">
                        <label for="floatingInput">Telephone number</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            <option value="">Enterprise</option>
                            <option value="">Business</option>
                        </select>
                        <label for="floatingSelect">Select Plan</label>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title" id="modalCenterTitle">Zsazsa McCleverty</h5>
                    <br>
                    <h6 class="modal-title" id="modalCenterTitle">This Company operates 4 sectors of activity</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="margin: 0;right: 3%;top: 5%;position: absolute;"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <ul class="ddff">
                                <li>List Item</li>
                                <li>List Item</li>
                                <li>List Item</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-left">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPrev" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title" id="modalCenterTitle">Coming Soon</h5>
                    <button type="button" style="margin: 0;right: 3%;top: 5%;position: absolute;" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userPOmailConfirmed" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column border-bottom pb-2">
                    <h5 class="modal-title" id="modalCenterTitle">E-mail ID Confirmation</h5>
                    <button type="button" style="margin: 0;right: 3%;top: 5%;position: absolute;" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="bg-success w-100 m-0 py-2 text-dark text-center">E-mail Confirmed</h5>
                    <span class="mt-4 h6 mb-2 d-block"> <i class="fas fa-check-circle text-success   "></i> Confirmation
                        date:
                        --/--/----
                    </span>
                    <hr>
                    <span class="mt-2 h6 mb-4 d-block"> <i class="fas fa-check-circle text-success    "></i> Confirmed by:
                        ------
                    </span>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userPOmailNotConfirmed" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header flex-column border-bottom pb-2">
                    <h5 class="modal-title" id="modalCenterTitle">E-mail ID Confirmation</h5>
                    <button type="button" style="margin: 0;right: 3%;top: 5%;position: absolute;" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="bg-danger w-100 m-0 py-2 text-center">E-mail ID isn't Confirmed</h5>
                    <button class="btn btn-primary d-block my-3 w-100" tabindex="0" type="button"> Resend Confirmation
                        E-mail</button>
                    <button class="btn btn-primary d-block w-100" tabindex="0" type="button"> Confirm E-mail</button>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
