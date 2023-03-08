@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Roles - Apps')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-access-roles.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-role.js') }}"></script>
    <script src="{{ asset('assets/js/admin_management.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-2">Roles List</h4>

    <p>A role provided access to predefined menus and features so that depending on <br> assigned role an administrator can
        have access to what user needs.</p>
    <!-- Role cards -->
    <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">Total 4 Admins</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Allen Rieske" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Julee Rossignol" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/15.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="John Doe" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1 h6">Financial Administrator</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">Total 7 Admins</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Jimmy Ressula" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="John Doe" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kristi Lawker" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/15.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Danny Paul" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/7.png') }}"
                                    alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1 h6">Manager</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">Total 5 Admins</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Andrew Tye" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Rishi Swaat" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Rossie Kim" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kim Merchent" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/10.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Sam D'souza" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/13.png') }}"
                                    alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1 h6">Support Administrator</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">Total 3 Admins</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kim Karlos" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/3.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Katy Turner" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Peter Adward" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/15.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/10.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="John Parker" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/11.png') }}"
                                    alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1 h6">Users Administrators</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">Total 2 Admins</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kim Merchent" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/10.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Sam D'souza" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/13.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Nurvi Karlos" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/15.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Andrew Tye" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/8.png') }}"
                                    alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Rossie Kim" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}"
                                    alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1 h6">PO. Administrator</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100">
                <div class="row h-100">
                    <div class="col-sm-5">
                        <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                            <img src="{{ asset('assets/img/illustrations/lady-with-laptop-' . $configData['style'] . '.png') }}"
                                class="img-fluid" alt="Image" width="100"
                                data-app-light-img="illustrations/lady-with-laptop-light.png"
                                data-app-dark-img="illustrations/lady-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body text-sm-end text-center ps-sm-0">
                            <button data-bs-target="#addRoleModal" data-bs-toggle="modal"
                                class="btn btn-primary mb-3 text-nowrap add-new-role">Add New Role</button>
                            <p class="mb-0">Add role, if it does not exist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <!-- Role Table -->
            <!-- Invoice List Table -->
            <div class="card py-3">
                <div class="container">
                    <h4>Filter:</h4>
                    <div class="filterable">
                        <div class="dropFilter invoice-title">
                            <div class="title-filter">
                                <select id="" name="countryFilter" class="countryFilter form-select">
                                    <option value="" selected>Select Country</option>
                                    @foreach ($countryData as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="status">
                                <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                                    <option value="" selected>Admin Roles</option>
                                    <option value="OPP">Role 1</option>
                                    <option value="OPC">Role 2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                                    <option value="" selected>Admin Status</option>
                                    <option value="OPP">Active</option>
                                    <option value="OPC">Inactive</option>
                                    <option value="OPC">Suspended</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <table id="adminList2" class="table table-striped table-hover dt-responsive">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Administrators</th>
                                <th scope="col">Administrator Country</th>
                                <th scope="col">Role</th>
                                <th scope="col">Profile Completion</th>
                                <th scope="col">Account Status</th>
                                <th scope="col cell-fit">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">Administrators</th>
                                <th scope="col">Administrator Country</th>
                                <th scope="col">Role</th>
                                <th scope="col">Profile Completion</th>
                                <th scope="col">Account Status</th>
                                <th scope="col cell-fit">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                                <span
                                                    class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('user-view-account') }}"
                                                class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                                    McCleverty</span></a><small
                                                class="text-success">zmcclevertye@soundcloud.com</small><span
                                                class="d-none">Burkina
                                                Faso</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center avatar-group my-3">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/11.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <span class="avatar-initial rounded-circle pull-up bg-secondary"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="3 more">+3</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>xxxxxxxxxx</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column py-3 border-bottom">
                                        <div class="d-flex justify-content-between">
                                            <small class="mb-1">12%</small>
                                        </div>
                                        <div class="progress w-100 me-3" style="height: 6px;">
                                            <div class="progress-bar bg-danger" style="width: 12%" aria-valuenow="12%"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="bg-success py-1 px-2 rounded text-white">Active</span></td>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                            data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                            aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                class="bx bx-show mx-1"></i>
                                        </a>
                                        <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                            data-bs-placement="top" aria-label="Preview Invoice"
                                            data-bs-original-title="Preview Invoice">
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                                <span
                                                    class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('user-view-account') }}"
                                                class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                                    McCleverty</span></a><small
                                                class="text-success">zmcclevertye@soundcloud.com</small><span
                                                class="d-none">Burkina
                                                Faso</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center avatar-group my-3">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <span class="avatar-initial rounded-circle pull-up bg-secondary"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="3 more">+3</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>xxxxxxxxxx</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column py-3 border-bottom">
                                        <div class="d-flex justify-content-between">
                                            <small class="mb-1">78%</small>
                                        </div>
                                        <div class="progress w-100 me-3" style="height: 6px;">
                                            <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="bg-danger py-1 px-2 rounded text-white">Inactive</span></td>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                            data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                            aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                class="bx bx-show mx-1"></i>
                                        </a>
                                        <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                            data-bs-placement="top" aria-label="Preview Invoice"
                                            data-bs-original-title="Preview Invoice">
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                                <span
                                                    class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('user-view-account') }}"
                                                class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                                    McCleverty</span></a><small
                                                class="text-success">zmcclevertye@soundcloud.com</small><span
                                                class="d-none">Burkina
                                                Faso</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center avatar-group my-3">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar"
                                                class="rounded-circle pull-up">
                                        </div>
                                        <div class="avatar">
                                            <span class="avatar-initial rounded-circle pull-up bg-secondary"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="3 more">+3</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>xxxxxxxxxx</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column py-3 border-bottom">
                                        <div class="d-flex justify-content-between">
                                            <small class="mb-1">60%</small>
                                        </div>
                                        <div class="progress w-100 me-3" style="height: 6px;">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60%"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="bg-warning py-1 px-2 rounded text-white">Suspended</span></td>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                            data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                            aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                                class="bx bx-show mx-1"></i>
                                        </a>
                                        <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                            data-bs-placement="top" aria-label="Preview Invoice"
                                            data-bs-original-title="Preview Invoice">
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <!--/ Role Table -->
        </div>
    </div>
    <!--/ Role cards -->

    <!-- Add Role Modal -->
    @include('_partials/_modals/modal-add-role')
    <!-- / Add Role Modal -->
@endsection
