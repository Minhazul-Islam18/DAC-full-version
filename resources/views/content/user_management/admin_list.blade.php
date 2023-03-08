@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script> --}}
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/admin_management.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

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

            <table id="adminList" class="table table-striped table-hover dt-responsive">
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
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#adminPrev"
                                        class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
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
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
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
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
                                        </li>
                                    </ul>
                                </div>
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
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#adminPrev"
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
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
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
                        <td><span class="bg-danger py-1 px-2 rounded text-white cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#deactivatingReason">Inactive</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#reactiveAdmin"
                                                class="dropdown-item text-success delete-record">Active</a>
                                        </li>
                                    </ul>
                                </div>
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
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#adminPrev"
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
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
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
                        <td><span class="bg-warning py-1 px-2 rounded text-white cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#suspendingReason">Suspended</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addData" aria-labelledby="addDataLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="addDataLabel" class="offcanvas-title">Add Admin</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <label for="filepond"></label>
                    <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                        data-max-files="3" />
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                        allowed.</span>
                </div>

                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>English</option>
                            <option value="ar">Arabic</option>
                            <option value="fr">French</option>
                        </select>
                        <label for="floatingSelect">Language</label>
                    </div>
                </div>
                <div class="my-3">
                    <label for="select2Primary" class="form-label">Select Administration Country</label>
                    <div class="select2-primary">
                        <select id="select2Primary" class="select2 form-select" multiple>
                            @foreach ($countryData as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Username">
                    <label for="floatingTitle">Username</label>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Firstname">
                    <label for="floatingTitle">First name</label>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Lastname">
                    <label for="floatingTitle">Last name</label>
                </div>
                <div class="form-floating my-3">
                    <input type="email" class="form-control" id="floatingTitle" placeholder="Enter E-mail ID">
                    <label for="floatingTitle">Email</label>
                </div>
                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="floatingTitle" placeholder="Enter Telephone Number">
                    <label for="floatingTitle">Telephone Number</label>
                </div>
                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="floatingTitle" placeholder="Enter Whatsapp Number">
                    <label for="floatingTitle">Whatsapp Number</label>
                </div>
                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="floatingTitle" placeholder="Enter Skype ID">
                    <label for="floatingTitle">Skype ID</label>
                </div>
                <div class="form-floating my-3">
                    <select class="form-select" id="floatingSelector" aria-label="Floating label select example">
                        <option value="Business">Editor</option>
                        <option value="Enterprise">Proof Reader</option>
                    </select>
                    <label for="floatingSelector">Select Role *</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business">Published</option>
                        <option value="Enterprise">Unpublished</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>
                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="adminPrev" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card">
                        <button type="button" style="align-self: end;" class="btn-close m-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded my-4" src="{{ asset('assets/img/avatars/9.png') }}"
                                        alt="User avatar" width="110" height="110">
                                    <div class="user-info text-center">
                                        <h5 class="mb-2">Yabre Mohammad</h5>
                                        <span class="badge bg-label-info">Finnance Administrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column py-3 border-bottom">
                                <div class="d-flex justify-content-between">
                                    <small>Profile Completion</small> <small class="mb-1">78%</small>
                                </div>
                                <div class="progress w-100 me-3" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <h5 class="py-2 border-bottom mb-4">About</h5>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bx-user-circle me-2"></i>Full Name:</span>
                                        <span>Yabre Mohammad</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i
                                                class="bx bxs-check-circle me-2 text-success"></i>Status:</span>
                                        <span>Active</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bxs-star me-2 text-warning"></i>Role:</span>
                                        <span>Finnance Administrator</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bxs-flag-alt me-2"></i>Country:</span>
                                        <span>USA</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bx-globe me-2"></i>Language:</span>
                                        <span>English</span>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="pt-3 pb-2 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bx-phone me-2"></i>Phone:</span>
                                        <span>+0123456789</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bxl-skype me-2"></i>Skype:</span>
                                        <span>jhon.doe</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between">
                                        <span class="fw-bold"><i class="bx bxl-whatsapp me-2"></i>Whatsapp:</span>
                                        <span>xxxxxxxxxx</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary me-sm-3 me-1" data-bs-toggle="modal"
                                data-bs-target="#logInAs">See more</button>
                            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="logInAs" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button style="align-self: end; display:flex" type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <div class="row">
                        <div class="col-12 d-flex  justify-content-center">
                            <i class='bx bx-error-alt display-1 text-warning'></i>
                        </div>
                        <div class="col-12">
                            <p class="h6 text-center">
                                To see the full details of this Administrator, You must have to login as this Account.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes, Login</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="noPermission" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button style="align-self: end; display:flex" type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <div class="row">
                        <div class="col-12 d-flex  justify-content-center">
                            <i class='bx bx-error-alt display-1 text-warning'></i>
                        </div>
                        <div class="col-12">
                            <p class="h6 text-center">
                                Sorry, You've no permission tosee the full details of this Administrator.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="suspendAdmin" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header container-fluid px-3">
                    <div class="row w-100 g-0">
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <h5 class="m-0">Suspending Admin</h5>
                        </div>
                        <div class="col-2">
                            <button style="align-self: end; display:flex" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 border-top border-bottom py-3 d-flex justify-content-around align-items-center">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30" alt="">
                            <span class="fw-bold">Yabre Mohammad</span>
                        </div>
                        <div class="col-12 py-3">
                            <div class="form-floating">
                                <textarea style="height: 100px" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Reasons for suspend</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deactiveAdmin" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header container-fluid px-3">
                    <div class="row w-100 g-0">
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <h5 class="m-0">Deactive Admin</h5>
                        </div>
                        <div class="col-2">
                            <button style="align-self: end; display:flex" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 border-top border-bottom py-3 d-flex justify-content-around align-items-center">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30" alt="">
                            <span class="fw-bold">Yabre Mohammad</span>
                        </div>
                        <div class="col-12 py-3">
                            <div class="form-floating">
                                <textarea style="height: 100px" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Reasons</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reactiveAdmin" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header container-fluid px-3">
                    <div class="row w-100 g-0">
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <h5 class="m-0">Reactive Admin</h5>
                        </div>
                        <div class="col-2">
                            <button style="align-self: end; display:flex" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 border-top border-bottom py-3 d-flex justify-content-around align-items-center">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30" alt="">
                            <span class="fw-bold">Yabre Mohammad</span>
                        </div>
                        <div class="col-12 py-3">
                            <div class="form-floating">
                                <textarea style="height: 100px" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Reasons</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="suspendingReason" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header container-fluid px-3">
                    <div class="row w-100 g-0">
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <h5 class="m-0">Suspending Reasons</h5>
                        </div>
                        <div class="col-2">
                            <button style="align-self: end; display:flex" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 border-top border-bottom py-3 d-flex justify-content-around align-items-center">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30" alt="">
                            <span class="fw-bold">Yabre Mohammad</span>
                        </div>
                        <div class="col-12 py-3">
                            <div class=""><label for="floatingTextarea">Reasons for suspend</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente voluptates consequatur voluptatem sint rem, maxime illo sed minima delectus commodi.</textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deactivatingReason" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header container-fluid px-3">
                    <div class="row w-100 g-0">
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <h5 class="m-0">Deactivating Reasons</h5>
                        </div>
                        <div class="col-2">
                            <button style="align-self: end; display:flex" type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 border-top border-bottom py-3 d-flex justify-content-around align-items-center">
                            <img class="rounded-circle" src="https://via.placeholder.com/30x30" alt="">
                            <span class="fw-bold">Yabre Mohammad</span>
                        </div>
                        <div class="col-12 py-3">
                            <div class=""><label for="floatingTextarea">Reasons</label>
                                <textarea class="form-control" placeholder=" " id="floatingTextarea">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente voluptates consequatur voluptatem sint rem, maxime illo sed minima delectus commodi.</textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
