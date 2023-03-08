@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-user-view.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-script')
    {{-- <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view-account.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user-connections.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">User / View /</span> Account
    </h4>
    <div class="row gy-4">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class=" d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="{{ asset('assets/img/avatars/9.png') }}"
                                height="110" width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h5 class="mb-2">Yabre Mohammad</h5>
                                <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <span class="badge bg-label-info">Certified
                                        Official Public Account</span>
                                    <span class="badge bg-white text-secondary badge-notifications px-2">?</span>
                                </a>
                            </div>
                            <div class="collapse mt-3" id="collapseExample">
                                <div class="d-grid d-sm-flex py-3 px-1 border rounded-2 border-success">
                                    <img src="{{ asset('assets/img/elements/1.jpg') }}" alt="collapse-image" height="65px"
                                        class="mx-2 mb-sm-0 mb-2 w-20">
                                    <span class="text-success">
                                        After through verification, the Public official account is Certified authentic.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column py-3 border-bottom">
                        <div class="d-flex justify-content-between">
                            <small>Profile Completion</small> <small class="mb-1">78%</small>
                        </div>
                        <div class="progress w-100 me-3" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap my-1 py-3 gap-2">
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class='bx bx-upload'></i></span>
                            <div>
                                <h5 class="mb-0">287</h5>
                                <span>CTD's Uploaded</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i
                                    class="fa-solid fa-hand-holding-dollar"></i></span>
                            <div>
                                <h5 class="mb-0">568 000 F CFA</h5>
                                <span>Agent Earn</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded">
                                <i class="fa-solid fa-building-columns"></i>
                            </span>
                            <div>
                                <h5 class="mb-0">3 568 000 F CFA</h5>
                                <span>Public Tresory Earn</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Username:</span>
                                <span>yabre.mohammad</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Email:</span>
                                <span>yabre@mohammad.org</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Supervising ministry:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">
                                    xxxxxxx, xxxxxxxx, xxxxxx, xxxxxx
                                </span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Service name:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">
                                    xxxxxxxxxxxx
                                </span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Contact:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Service website:</span>
                                <span>www.xyz.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Service address:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Aliquam, laboriosam.</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Service short bio:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Aliquam, laboriosam.</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Languages:</span>
                                <span>French</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Country:</span>
                                <span>Burkina Faso</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Status:</span>
                                <span class="badge bg-label-success">Active</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center pt-3">
                            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                data-bs-toggle="modal">Edit</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspend</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
            <!-- Plan Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="badge bg-label-primary">Standard</span>
                        <div class="d-flex justify-content-center">
                            <sup class="h5 pricing-currency mt-3 mt-sm-4 mb-0 me-1 text-primary">$</sup>
                            <h1 class="display-3 fw-normal mb-0 text-primary">99</h1>
                            <sub class="fs-6 pricing-duration mt-auto mb-4">/month</sub>
                        </div>
                    </div>
                    <ul class="ps-3 g-2 mb-3">
                        <li class="mb-2">10 Users</li>
                        <li class="mb-2">Up to 10 GB storage</li>
                        <li>Basic Support</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <h6 class="mb-0">Days</h6>
                        <h6 class="mb-0">65% Completed</h6>
                    </div>
                    <div class="progress mb-1" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>4 days remaining</span>
                    <div class="d-grid w-100 mt-3 pt-2">
                        <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade
                            Plan</button>
                    </div>
                </div>
            </div>
            <!-- /Plan Card -->
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/account') }}"><i
                            class="bx bx-user me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/security') }}"><i
                            class="bx bx-lock-alt me-1"></i>Security</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/billing') }}"><i
                            class='bx bx-wallet me-1'></i>Wallet & Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/notifications') }}"><i
                            class="bx bx-bell me-1"></i>Notifications</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="bx bx-link-alt me-1"></i>Connections</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/earnings') }}"><i
                            class='bx bx-stats me-1'></i>Earn statistics</a></li>
            </ul>
            <hr>
            <!-- Connected Accounts -->
            <div class="card mb-4">
                <h5 class="card-header">Connected Accounts</h5>
                <div class="card-body">
                    <p>Display content from your connected accounts on your site</p>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/google.png') }}" alt="google" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Google</h6>
                                <small class="text-muted">Calendar and contacts</small>
                            </div>
                            <div class="col-3 text-end">
                                <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/slack.png') }}" alt="slack" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Slack</h6>
                                <small class="text-muted">Communication</small>
                            </div>
                            <div class="col-3 text-end">
                                <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/github.png') }}" alt="github" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Github</h6>
                                <small class="text-muted">Manage your Git repositories</small>
                            </div>
                            <div class="col-3 text-end">
                                <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/mailchimp.png') }}" alt="mailchimp"
                                class="me-3" height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Mailchimp</h6>
                                <small class="text-muted">Email marketing service</small>
                            </div>
                            <div class="col-3 text-end">
                                <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/asana.png') }}" alt="asana" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Asana</h6>
                                <small class="text-muted">Communication</small>
                            </div>
                            <div class="col-3 text-end">
                                <label class="switch me-0">
                                    <input type="checkbox" class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="switch-off">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </span>
                                    <span class="switch-label"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Connected Accounts -->

            <!-- Social Accounts -->
            <div class="card">
                <h5 class="card-header">Social Accounts</h5>
                <div class="card-body">
                    <p>Display content from social accounts on your site</p>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/facebook.png') }}" alt="facebook" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Facebook</h6>
                                <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-label-secondary">
                                    <i class='bx bx-link-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/twitter.png') }}" alt="twitter" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Twitter</h6>
                                <a href="{{ config('variables.twitterUrl') }}" class="small"
                                    target="_blank">{{ '@' . config('variables.creatorName') }}</a>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-label-danger">
                                    <i class='bx bx-trash-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/instagram.png') }}" alt="instagram"
                                class="me-3" height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">instagram</h6>
                                <a href="{{ config('variables.instagramUrl') }}" class="small"
                                    target="_blank">{{ '@' . config('variables.creatorName') }}</a>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-label-danger">
                                    <i class='bx bx-trash-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/dribbble.png') }}" alt="dribbble" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Dribbble</h6>
                                <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-label-secondary">
                                    <i class='bx bx-link-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/brands/behance.png') }}" alt="behance" class="me-3"
                                height="30">
                        </div>
                        <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Behance</h6>
                                <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-label-secondary">
                                    <i class='bx bx-link-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <div class="table-responsive mb-3">
                        <table class="dataTableUaccount table table-striped table-hover dt-responsive"
                            id="dataTableUaccount">
                            <caption class="sr-only"></caption>
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col">Followers</th>
                                    <th scope="col">Total amount Paid to postulate (F CFA)</th>
                                    <th scope="col">Total amount Paid to consult (F CFA)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tfoot class="hidden">
                                <tr>
                                    <th scope="col">Followers</th>
                                    <th scope="col">Total amount Paid to postulate (F CFA)</th>
                                    <th scope="col">Total amount Paid to consult (F CFA)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="text-body text-truncate">
                                                    <span class="fw-semibold">Yabre Mohamed</span></a>
                                                <small class="text-success"> xyz@gmail.com </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        78 000
                                    </td>
                                    <td>
                                        96 000
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="text-body" aria-label="Move to Trash"
                                                data-bs-toggle="modal" data-bs-target="#modalPrev">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="text-body text-truncate">
                                                    <span class="fw-semibold">Yabre Mohamed</span></a>
                                                <small class="text-success"> xyz@gmail.com </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        78 000
                                    </td>
                                    <td>
                                        96 000
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="text-body" aria-label="Move to Trash"
                                                data-bs-toggle="modal" data-bs-target="#modalPrev">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--/ User Content -->
    </div>
@endsection
