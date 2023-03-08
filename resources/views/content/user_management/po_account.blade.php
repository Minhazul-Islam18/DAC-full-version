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
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/app-user-view.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view-account.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user-view.js') }}"></script>
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
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="bx bx-user me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/security') }}"><i
                            class="bx bx-lock-alt me-1"></i>Security</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/billing') }}"><i
                            class='bx bx-wallet me-1'></i>Wallet & Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/notifications') }}"><i
                            class="bx bx-bell me-1"></i>Notifications</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/connections') }}"><i
                            class="bx bx-link-alt me-1"></i>Connections</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/earnings') }}"><i
                                class='bx bx-stats me-1'></i>Earn statistics</a></li>
            </ul>
            <hr>
            <!--/ User Pills -->
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills userViewTab mb-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active d-flex gap-1" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                            aria-selected="true">
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 484.955 484.955"
                                xml:space="preserve" width="18px" height="auto"style="fill: #ffffff;">
                                <g>
                                    <g>
                                        <path
                                            d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5    l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z" />
                                        <path
                                            d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2    c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3    c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3    c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4    c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5    c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6    l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6    c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3    c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256    c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z" />
                                    </g>
                                </g>
                            </svg> Paid to Postulate
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                            aria-selected="false">
                            <svg width="18px" height="auto" viewBox="0 0 24 24"
                                id="meteor-icon-kit__regular-file-search" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.6064 17.1922L23.1213 21.7071C23.5118 22.0976 23.5118 22.7308 23.1213 23.1213C22.7308 23.5118 22.0976 23.5118 21.7071 23.1213L17.1922 18.6064C16.0236 19.4816 14.5723 20 13 20C9.13401 20 6 16.866 6 13C6 9.13401 9.13401 6 13 6C16.866 6 20 9.13401 20 13C20 14.5723 19.4816 16.0236 18.6064 17.1922ZM7 2V6C7 6.55228 6.55228 7 6 7H2V21C2 21.5523 2.44772 22 3 22H14C14.5523 22 15 22.4477 15 23C15 23.5523 14.5523 24 14 24H3C1.34315 24 0 22.6569 0 21V6C0 2.68629 2.68629 0 6 0H15C16.6569 0 18 1.34315 18 3V4C18 4.55228 17.5523 5 17 5C16.4477 5 16 4.55228 16 4V3C16 2.44772 15.5523 2 15 2H7ZM2.12602 5H5V2.12602C3.59439 2.4878 2.4878 3.59439 2.12602 5ZM13 18C15.7614 18 18 15.7614 18 13C18 10.2386 15.7614 8 13 8C10.2386 8 8 10.2386 8 13C8 15.7614 10.2386 18 13 18Z"
                                    fill="#FFFFFF" />
                            </svg>
                            Paid to Consult</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                            aria-selected="false">
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 484.955 484.955"
                                xml:space="preserve" width="18px" height="auto" style="fill: #ffffff;">
                                <g>
                                    <g>
                                        <path
                                            d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2    c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3    c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3    c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4    c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5    c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6    l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6    c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3    c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256    c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z" />
                                    </g>
                                </g>
                            </svg>
                            Cart List
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-wishlist" aria-controls="navs-pills-top-wishlist"
                            aria-selected="false">
                            <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" fill="none"
                                height="auto" width="18px" stroke="#fff">
                                <path
                                    d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                            </svg>
                            Wishlist
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <h6>User's Paid to Postulate CTD list.</h6>
                        <div class="table-responsive mb-3">
                            <div class="filterable">
                                <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                                    <div class="title-filter">
                                        <select name="userViewCountry" class="form-select userViewCountry">
                                            <option value="" selected="">Select Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLanguage" class="form-select userViewLanguage">
                                            <option value="" selected="">Select Language</option>
                                            <option value="French">French</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                            <option value="" selected="">Number of Lot's</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewFunding" id="userViewFunding"
                                            class="form-select userViewFunding">
                                            <option value="" selected="">Funding sources</option>
                                            <option value="ADB">ADB</option>
                                            <option value="World Bank">World Bank</option>
                                            <option value="IDB">IDB</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewStatus" id="userViewStatus"
                                            class="form-select userViewStatus">
                                            <option value="" selected="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table class="dataTableUaccount table table-striped table-hover dt-responsive"
                                id="dataTableUaccount">
                                <caption class="sr-only"></caption>
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot class="hidden">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
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
                                                <div class="d-flex flex-column"><small> <a
                                                            href="{{ route('ctd-preview') }}" class="text-danger">CTD
                                                            ID</a></small>
                                                    <a href="" class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a>

                                                    <span class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#userLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-success">CTD
                                                            ID</a></small><a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#userLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <h6>User's Paid to Consult CTD list.</h6>
                        <div class="table-responsive mb-3">
                            <div class="filterable">
                                <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                                    <div class="title-filter">
                                        <select name="userViewCountry" class="form-select userViewCountry">
                                            <option value="" selected="">Select Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLanguage" class="form-select userViewLanguage">
                                            <option value="" selected="">Select Language</option>
                                            <option value="French">French</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                            <option value="" selected="">Number of Lot's</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewFunding" id="userViewFunding"
                                            class="form-select userViewFunding">
                                            <option value="" selected="">Funding sources</option>
                                            <option value="ADB">ADB</option>
                                            <option value="World Bank">World Bank</option>
                                            <option value="IDB">IDB</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewStatus" id="userViewStatus"
                                            class="form-select userViewStatus">
                                            <option value="" selected="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table class="dataTableUaccountCon table table-striped table-hover dt-responsive"
                                id="dataTableUaccountCon">
                                <caption class="sr-only"></caption>
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot class="hidden">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-danger">CTD
                                                            ID</a></small><a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#userConsultLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-success">CTD
                                                            ID</a></small><a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#userConsultLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                        <h6>User's Cart list.</h6>
                        <div class="table-responsive mb-3">
                            <div class="filterable">
                                <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                                    <div class="title-filter">
                                        <select name="userViewCountry" class="form-select userViewCountry">
                                            <option value="" selected="">Select Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLanguage" class="form-select userViewLanguage">
                                            <option value="" selected="">Select Language</option>
                                            <option value="French">French</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                            <option value="" selected="">Number of Lot's</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewFunding" id="userViewFunding"
                                            class="form-select userViewFunding">
                                            <option value="" selected="">Funding sources</option>
                                            <option value="ADB">ADB</option>
                                            <option value="World Bank">World Bank</option>
                                            <option value="IDB">IDB</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewStatus" id="userViewStatus"
                                            class="form-select userViewStatus">
                                            <option value="" selected="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table class="dataTableUaccount table table-striped table-hover dt-responsive" id="">
                                <caption class="sr-only"></caption>
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot class="hidden">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-danger">CTD
                                                            ID</a></small> <a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#userCartLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-success">CTD
                                                            ID</a></small> <a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#userCartLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-wishlist" role="tabpanel">
                        <h6>User's Wishlist.</h6>
                        <div class="table-responsive mb-3">
                            <div class="filterable">
                                <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                                    <div class="title-filter">
                                        <select name="userViewCountry" class="form-select userViewCountry">
                                            <option value="" selected="">Select Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLanguage" class="form-select userViewLanguage">
                                            <option value="" selected="">Select Language</option>
                                            <option value="French">French</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                            <option value="" selected="">Number of Lot's</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewFunding" id="userViewFunding"
                                            class="form-select userViewFunding">
                                            <option value="" selected="">Funding sources</option>
                                            <option value="ADB">ADB</option>
                                            <option value="World Bank">World Bank</option>
                                            <option value="IDB">IDB</option>
                                        </select>
                                    </div>
                                    <div class="status">
                                        <select name="userViewStatus" id="userViewStatus"
                                            class="form-select userViewStatus">
                                            <option value="" selected="">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table class="dataTableUaccount table table-striped table-hover dt-responsive" id="">
                                <caption class="sr-only"></caption>
                                <thead class="bg-primary">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot class="hidden">
                                    <tr>
                                        <th scope="col">CTD List</th>
                                        <th scope="col">CTD Title</th>
                                        <th scope="col">Number of lots</th>
                                        <th scope="col">Price</th>
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-danger">CTD
                                                            ID</a></small><a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#userWishlistLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
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
                                                    <small><a href="{{ route('ctd-preview') }}" class="text-success">CTD
                                                            ID</a></small><a href=""
                                                        class="text-body text-truncate">
                                                        <span class="fw-semibold">Type of CTD </span></a><span
                                                        class="d-none">Bangladesh</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                            distinctio modi ad accusantium sequi?
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                                <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#userWishlistLots"
                                                class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                                110000
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:;" data-bs-toggle="tooltip" class="text-body"
                                                    data-bs-placement="top" aria-label="Send Mail"
                                                    data-bs-original-title="Send Mail"><i class="bx bx-send mx-1"></i></a>
                                                <a href="javascript:void(0);" class="text-body"
                                                    aria-label="Move to Trash" data-bs-toggle="modal"
                                                    data-bs-target="#modalPrev">
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
            <!-- Modal -->
            <div class="modal fade" id="userLots" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between pb-2 border-bottom">
                            <div class="avatar avatar-xs">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                    class="rounded-circle">
                            </div>
                            <h5 class="modal-title" id="modalScrollableTitle">Paid to Postulate</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row border-bottom">
                                <div class="col-md-2">
                                    <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-center">CTD ID</h4>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="alert alert-secondary my-3" role="alert">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                    mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1 (15 Sold)</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Unit Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total amount:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            825000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 2 (20 Sold)</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Unit Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total amount:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            1100000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span class="border-bottom pb-2">
                                        1925000 F CFA
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-3"></div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Buyers List</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="bx bx-send mx-1"></i> Send
                                mail</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="userCartLots" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between pb-2 border-bottom">
                            <div class="avatar avatar-xs">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                    class="rounded-circle">
                            </div>
                            <h5 class="modal-title" id="modalScrollableTitle">Cart List </h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row border-bottom">
                                <div class="col-md-2">
                                    <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-center">CTD ID</h4>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="alert alert-secondary my-3" role="alert">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                    mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1 (15 Sold)</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Unit Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total amount:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            825000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 2 (20 Sold)</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Unit Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total amount:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            1100000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span class="border-bottom pb-2">
                                        1925000 F CFA
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-3"></div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Users List</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                            <hr>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="bx bx-send mx-1"></i> Send
                                mail</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="userWishlistLots" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between pb-2 border-bottom">
                            <div class="avatar avatar-xs">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                    class="rounded-circle">
                            </div>
                            <h5 class="modal-title" id="modalScrollableTitle">Wishlist</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row border-bottom">
                                <div class="col-md-2">
                                    <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-center">CTD ID</h4>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="alert alert-secondary my-3" role="alert">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                    mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                            </div>
                            <hr>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-6">
                                    <span>Total Users:</span>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">75</div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Users List</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="bx bx-send mx-1"></i> Send
                                mail</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="userConsultLots" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between pb-2 border-bottom">
                            <div class="avatar avatar-xs">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                    class="rounded-circle">
                            </div>
                            <h5 class="modal-title" id="modalScrollableTitle">Paid to Consult</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row border-bottom">
                                <div class="col-md-2">
                                    <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-center">CTD ID</h4>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="alert alert-secondary my-3" role="alert">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                    mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 2</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Unit Price:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="fw-bold pb-1">5000 F CFA</div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total amount (125 Sold):
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="fw-bold pb-1">625000 F CFA</div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row mt-4">
                                <div class="col-3"></div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Buyers List</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                            <hr>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="bx bx-send mx-1"></i> Send
                                mail</button>
                            <button type="button" class="btn btn-label-secondary"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalPrev" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header pb-2 border-bottom">
                            <h5 class="modal-title" id="modalScrollableTitle">CTD Quick View</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row border-bottom">
                                <div class="col-md-2">
                                    <a href="https://placeholder.com"><img
                                            src="https://dummyimage.com/30x20/fff/aaa"></a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-center">CTD ID</h4>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="alert alert-secondary my-3" role="alert">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                    mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                            </div>
                            <div class="CTD-infos">
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Country:</strong>
                                    <span>Bangladesh</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Instution:</strong>
                                    <span>Minstry of Health</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Service:</strong>
                                    <span>Director of public procurement</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Type of CTD:</strong>
                                    <span>International tender.</span>
                                </div>
                                <div class="d-flex justify-content-between py-3">
                                    <strong>Number of Lots:</strong>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 1</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-2">
                                            Title
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            Total:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="CTD-infos">
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Funding sources:</strong>
                                    <span>xxxxxxxxxxxx</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Number of pages:</strong>
                                    <span>50</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Tender submission deadline:</strong>
                                    <span>285/07/2023, 21:30PM</span>
                                </div>
                                <div class="d-flex justify-content-between py-3 border-bottom">
                                    <strong>Updated date:</strong>
                                    <span>285/07/2023, 21:30PM</span>
                                </div>
                            </div>
                            <div class="container-fluid p-0">
                                <div class="row my-3 flex-wrap gy-3">
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-info">
                                                        <i class='bx bx-download fs-4'></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Downloads</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-info">
                                                        <i class="fa-regular fa-eye fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Views</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-warning">
                                                        <i class="fa-solid fa-cart-shopping fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Cart list</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-success">
                                                        <img src="{{ asset('assets/img/icons/misc/eye-tick.png') }}"
                                                            alt="" style="width: 22px;height: auto;">
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Paid to Consult</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-warning">
                                                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                                            stroke-width="5" fill="none" height="auto"
                                                            width="22px" stroke="#fdac41">
                                                            <path
                                                                d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Wishlist</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-success">
                                                        <svg fill="#000000" version="1.1" id="Capa_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 484.955 484.955" xml:space="preserve"
                                                            width="18px" height="auto" style="fill: #39da8a;">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5    l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z">
                                                                    </path>
                                                                    <path
                                                                        d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2    c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3    c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3    c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4    c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5    c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6    l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6    c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3    c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256    c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <span class="d-block text-nowrap">Paid to Postulate</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer pt-3">
                            <a href="{{ route('ctd-preview') }}"><button type="button" class="btn btn-primary">See
                                    more
                                </button></a>
                            <button type="button" class="btn btn-label-secondary"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Create App Modal -->
            <!-- Invoice table -->
            <div class="card px-3 py-4">
                <h6>User's Invoice list</h6>
                <div class="filterable">
                    <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                        <div class="title-filter">
                            <select name="countryFilter" class="countryFilter form-select">
                                <option value="" selected="">Select Country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                            </select>
                        </div>
                        <div class="">
                            <select name="iStatusFilter" id="iStatusFilter" class="form-select iStatusFilter">
                                <option value="" selected="">Invoice status</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>
                        </div>
                        <div class="status">
                            <select name="payMethodFilter" id="payMethodFilter" class="form-select payMethodFilter">
                                <option value="" selected="">Payment Method</option>
                                <option value="Bank transfer">Bank transfer</option>
                                <option value="PayPal">PayPal</option>
                                <option value="OrangePay">OrangePay</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mb-3">
                    <table class="table datatable-invoice border-top" id="invoiceUview">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th><i class='bx bx-trending-up'></i></th>
                                <th>Total(F CFA)</th>
                                <th>Issued Date</th>
                                <th>Balance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th><i class='bx bx-trending-up'></i></th>
                                <th>Total(F CFA)</th>
                                <th>Issued Date</th>
                                <th>Balance</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089BFA</a>
                                    <span class="d-none">Bangladesh</span>
                                    <span class="d-none">PayPal</span>
                                    <span class="d-none">Paid</span>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"><i
                                                class="bx bxs-paper-plane"></i></span></span>
                                </td>
                                <td><span class="d-none">930777</span>930777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="badge bg-label-success">Paid</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089BFA</a>
                                    <span class="d-none">PayPal</span>
                                    <span class="d-none">Paid</span>
                                    <span class="d-none">Burkina Faso</span>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40">PS</span></span>
                                </td>
                                <td><span class="d-none">930777</span>930777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="badge bg-label-success"> Paid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089BFA</a>
                                    <span class="d-none">OrangePay</span>
                                    <span class="d-none">Unpaid</span>
                                    <span class="d-none">Bangladesh</span>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40"><i
                                                class="bx bxs-paper-plane"></i></span></span>
                                </td>
                                <td><span class="d-none">930777</span>930777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="badge bg-label-warning"> Unpaid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089RCI</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="mdi-eye-check-outline" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M23.5,17L18.5,22L15,18.5L16.5,17L18.5,19L22,15.5L23.5,17M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M12,4.5C17,4.5 21.27,7.61 23,12C22.75,12.65 22.44,13.26 22.08,13.85C21.5,13.5 20.86,13.25 20.18,13.12L20.82,12C19.17,8.64 15.76,6.5 12,6.5C8.24,6.5 4.83,8.64 3.18,12C4.83,15.36 8.24,17.5 12,17.5L13.21,17.43C13.07,17.93 13,18.46 13,19V19.46L12,19.5C7,19.5 2.73,16.39 1,12C2.73,7.61 7,4.5 12,4.5Z" />
                                            </svg></span></span>
                                </td>
                                <td><span class="d-none">3077</span>530777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">Bank Transfer</span>
                                    <span class="d-none">Non-expired</span>
                                    <span class="badge bg-label-success"> Paid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089RCI</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"><svg
                                                version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 58 58"
                                                style="enable-background:new 0 0 58 58;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#BDC3C7;"
                                                        d="M58,40.5H8v-26h50V40.5z M10,38.5h46v-22H10V38.5z" />
                                                    <path style="fill:#BDC3C7;"
                                                        d="M9,47.5c-0.553,0-1-0.447-1-1v-7c0-0.553,0.447-1,1-1s1,0.447,1,1v7C10,47.053,9.553,47.5,9,47.5z" />
                                                    <circle style="fill:#556080;" cx="19" cy="51.5"
                                                        r="4" />
                                                    <circle style="fill:#556080;" cx="43" cy="51.5"
                                                        r="4" />
                                                    <path style="fill:#BDC3C7;"
                                                        d="M52,47.5H9c-0.553,0-1-0.447-1-1s0.447-1,1-1h43c0.553,0,1,0.447,1,1S52.553,47.5,52,47.5z" />
                                                    <circle style="fill:#24AE5F;" cx="33" cy="15.5"
                                                        r="13" />
                                                    <path style="fill:#FFFFFF;"
                                                        d="M31.999,21.5c-0.226,0-0.452-0.076-0.64-0.231l-6-5c-0.424-0.354-0.481-0.984-0.128-1.409   c0.354-0.424,0.982-0.48,1.409-0.128l6,5c0.424,0.354,0.481,0.984,0.128,1.409C32.57,21.378,32.286,21.5,31.999,21.5z" />
                                                    <path style="fill:#FFFFFF;"
                                                        d="M32,21.5c-0.236,0-0.474-0.083-0.664-0.253c-0.413-0.366-0.45-0.999-0.083-1.411l8-9   c0.366-0.414,0.998-0.451,1.411-0.083c0.413,0.366,0.45,0.999,0.083,1.411l-8,9C32.55,21.387,32.275,21.5,32,21.5z" />
                                                    <path style="fill:#BDC3C7;"
                                                        d="M9,7.5H4c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S9.553,7.5,9,7.5z" />
                                                    <path style="fill:#BDC3C7;"
                                                        d="M9,16.5c-0.553,0-1-0.447-1-1v-9c0-0.553,0.447-1,1-1s1,0.447,1,1v9C10,16.053,9.553,16.5,9,16.5z" />
                                                    <circle style="fill:#D8625E;" cx="3" cy="6.5"
                                                        r="3" />
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg></span></span>
                                </td>
                                <td><span class="d-none">3077</span>530777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">Bank Transfer</span>
                                    <span class="d-none">Non-expired</span>
                                    <span class="badge bg-label-success"> Paid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089BGA</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40"><svg
                                                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 508.4 508.4"
                                                style="enable-background:new 0 0 508.4 508.4;" xml:space="preserve">
                                                <path style="fill:#EF934A;"
                                                    d="M422.2,148.8c0-14.8-12.4-26.4-27.2-26.4H58.6c-14.8,0-20.4,3.2-20.4,18V152v40.8v13.6v210.8v17.2  v40.8c0,14.8,10.8,31.2,25.6,31.2H425c14.8,0,29.2-16.4,29.2-31.2v-92.8h1.2c7.6,0,14.8-8.4,14.8-16V312c0-7.6-7.2-9.6-14.8-9.6  h-1.2v-21.2v-74.8v-17.2c0-14.8-10.4-27.2-25.2-27.2h-6.8V148.8z" />
                                                <path style="fill:#E8BB85;"
                                                    d="M410.2,450.8c0,3.6-2,11.6-5.6,11.6H57.4L47,459.6l-8.8-8.8V218.4h366.4c3.6,0,5.6,0.8,5.6,4.4V450.8  z" />
                                                <path style="fill:#E07D46;"
                                                    d="M470.2,368.8c0,7.6-6,13.6-13.6,13.6H327.8c-7.6,0-13.6-6-13.6-13.6V312c0-7.6,6-13.6,13.6-13.6  h128.8c7.6,0,13.6,6,13.6,13.6L470.2,368.8L470.2,368.8z" />
                                                <circle style="fill:#B44F2B;" cx="357.4" cy="331.2"
                                                    r="24" />
                                                <path style="fill:#E07D46;"
                                                    d="M425.8,162.4c-1.6-13.2-12.8-24-26.8-24H77.4c-6.4,0-12,5.2-12,12c0,6.4,5.2,12,12,12H425.8z" />
                                                <path style="fill:#54B265;"
                                                    d="M257,203.2l83.6-104.8h-34.4v-96h-100v96h-34.8L257,203.2z" />
                                                <g>
                                                    <path style="fill:#CCCCCC;"
                                                        d="M278.6,172.4L278.6,172.4L278.6,172.4z" />
                                                    <path style="fill:#CCCCCC;" d="M291,156.8L291,156.8L291,156.8z" />
                                                    <path style="fill:#CCCCCC;"
                                                        d="M190.6,113.2L190.6,113.2L190.6,113.2z" />
                                                </g>
                                                <path
                                                    d="M259,207.2c-1.2,0-2.4-0.4-3.2-1.6L168.2,98.8c-0.8-1.2-1.2-2.8-0.4-4.4c0.8-1.2,2-2.4,3.6-2.4h28.8V4c0-2.4,1.6-4,4-4h100  c2.4,0,4,1.6,4,4v88h32.4c1.6,0,2.8,0.8,3.6,2.4c0.8,1.2,0.4,2.8-0.4,4.4l-81.6,106.8C261.4,206.4,260.2,207.2,259,207.2L259,207.2z   M179.8,100.4l78.8,96.4l73.6-96.4h-28.4c-2.4,0-4-1.6-4-4v-88h-92v88c0,2.4-1.6,4-4,4H179.8z" />
                                                <path
                                                    d="M433.4,508.4H72.2c-17.6,0-35.6-18-39.6-33.6c0-0.4,0-0.8,0-1.2V198.4c0-2.4,1.6-4,4-4s4,1.6,4,4v274.8  c4,14,19.2,27.2,32,27.2h361.2c12.4,0,18.8-13.6,18.8-26.8v-91.2c0-2.4,1.6-4,4-4s4,1.6,4,4v91.2C460.2,490.8,451,508.4,433.4,508.4  z" />
                                                <path
                                                    d="M238.2,184.4H68.6c-17.6,0-36.4-2-36.4-25.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12,4,17.2,28.4,17.2h169.6c2.4,0,4,1.6,4,4  S240.6,184.4,238.2,184.4z" />
                                                <path
                                                    d="M456.2,298.4c-2.4,0-4-1.6-4-4v-95.2c0-11.6-4.4-14.8-18.8-14.8H278.2c-2.4,0-4-1.6-4-4s1.6-4,4-4h155.2  c14,0,26.8,2.8,26.8,22.8v95.2C460.2,296.8,458.6,298.4,456.2,298.4z" />
                                                <path
                                                    d="M419,145.2c-2.4,0-4-1.6-4-4c0-13.2-3.6-16.8-16-16.8h-72.8c-2.4,0-4-1.6-4-4s1.6-4,4-4H399c17.2,0,24,7.2,24,24.8  C423,143.2,421.4,145.2,419,145.2z" />
                                                <path
                                                    d="M36.2,418.4c-2.4,0-4-1.6-4-4V139.2c0-0.4,0-0.8,0-1.2c2.8-10,11.6-21.6,39.6-21.6h118c2.4,0,4,1.6,4,4s-1.6,4-4,4h-118  c-18,0-28.8,5.2-32,15.2v274.8C40.2,416.8,38.6,418.4,36.2,418.4z" />
                                                <path
                                                    d="M456.2,278.4c-2.4,0-4-1.6-4-4v-90.8c0-11.6-4.4-15.2-18.8-15.2H294.2c-2.4,0-4-1.6-4-4s1.6-4,4-4h139.2  c13.2,0,26.8,2.8,26.8,23.2v90.8C460.2,276.8,458.6,278.4,456.2,278.4z" />
                                                <path
                                                    d="M226.2,168.4h-150c-8.8,0-14.4-10-14.4-19.6c0-10,6-16.4,14.4-16.4h126c2.4,0,4,1.6,4,4s-1.6,4-4,4h-126  c-5.6,0-6.4,5.2-6.4,8.4c0,5.6,2.8,11.6,6.4,11.6h150c2.4,0,4,1.6,4,4S228.6,168.4,226.2,168.4z" />
                                                <path
                                                    d="M426.6,164.4c-2,0-3.6-1.6-4-3.6c-1.6-11.6-12-20.4-24-20.4h-84.4c-2.4,0-4-1.6-4-4s1.6-4,4-4H399c16,0,30,12,31.6,27.6  c0.4,2-1.2,4-3.6,4.4C427,164.4,427,164.4,426.6,164.4z" />
                                                <path
                                                    d="M458.6,384.4H330.2c-9.6,0-17.6-8-17.6-17.6v-52.4c0-9.6,8-17.6,17.6-17.6h128.4c9.6,0,17.6,8,17.6,17.6v52.4  C476.2,376.4,468.2,384.4,458.6,384.4z M329.8,304.4c-5.2,0-9.6,4.4-9.6,9.6v52.4c0,5.2,4.4,9.6,9.6,9.6h128.4  c5.2,0,9.6-4.4,9.6-9.6V314c0-5.2-4.4-9.6-9.6-9.6H329.8z" />
                                                <path
                                                    d="M361.8,360.4c-15.6,0-28-12.8-28-28s12.8-28,28-28s28,12.4,28,28S377.4,360.4,361.8,360.4z M361.8,312.4  c-11.2,0-20,9.2-20,20c0,11.2,9.2,20,20,20c11.2,0,20-9.2,20-20C381.8,321.2,373,312.4,361.8,312.4z" />
                                                <path
                                                    d="M361.8,344.4c-6.8,0-12-5.2-12-12s5.2-12,12-12c2.4,0,4,1.6,4,4s-1.6,4-4,4s-4,1.6-4,4s1.6,4,4,4s4-1.6,4-4s1.6-4,4-4  s4,1.6,4,4C373.8,339.2,368.2,344.4,361.8,344.4z" />
                                                <path
                                                    d="M410.6,468.4H64.2c-17.2,0-32-14.8-32-32.4c0-2.4,1.6-4,4-4s4,1.6,4,4c0,13.2,11.2,24.4,24,24.4h342.4l-0.8-78.4  c0-2.4,1.6-4,4-4l0,0c2,0,4,1.6,4,4l0.8,82.4c0,1.2-0.4,2-1.2,2.8C412.6,468,411.8,468.4,410.6,468.4z" />
                                                <path
                                                    d="M410.6,277.6L410.6,277.6c-2.4,0-4-2-4-4l0.4-48.8H66.6c-9.6,0-20.8,0-27.6-6.8c-4.4-4.4-6.4-10.8-6.4-19.6c0-2.4,1.6-4,4-4  s4,1.6,4,4c0,6.4,1.2,11.2,4.4,14c4.8,4.8,13.6,4.8,22,4.4h2h342.4c1.2,0,2,0.4,2.8,1.2c0.8,0.8,1.2,1.6,1.2,2.8l-0.4,52.8  C414.6,275.6,412.6,277.6,410.6,277.6z" />
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg></span></span>
                                </td>
                                <td><span class="d-none">930777</span>930777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">PayPal</span>
                                    <span class="d-none">Expired</span>
                                    <span class="badge bg-label-success"> Paid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089RCI</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 506.8 506.8"
                                                style="enable-background:new 0 0 506.8 506.8;" xml:space="preserve">
                                                <path style="fill:#EF934A;"
                                                    d="M425.4,149.6c0-14.8-13.6-28.8-28.4-28.8H67c-5.6,0-19.6,1.2-23.2,4.4c-2,2-7.6,5.2-7.6,11.6  c0,4.4-2.8,8.4-2.8,12.8l0.8,3.2l3.2,40.8v13.6v210.4v16.8v40.8c0,14.8,14.4,25.6,29.2,25.6h360c14.8,0,26.8-10.8,26.8-25.6v-94.4  l0,0c7.6,0,16-6.8,16-14.4V312c0-7.6-8.8-11.6-16-11.6l0,0v-18.8v-74.4v-16.8c0-14.8-7.6-29.6-22.8-29.6h-5.2V149.6z" />
                                                <path style="fill:#E8BB85;"
                                                    d="M410.2,452.8c0,3.6-3.2,6-6.8,6H46.2l-10.4-11.2l2.8-228.8h365.2c3.6,0,6.8,3.2,6.8,6.8v227.2H410.2z  " />
                                                <path style="fill:#E07D46;"
                                                    d="M469.4,367.2c0,7.6-6,13.6-13.6,13.6H327c-7.6,0-13.6-6-13.6-13.6v-56.8c0-7.6,6-13.6,13.6-13.6  h128.8c7.6,0,13.6,6,13.6,13.6L469.4,367.2L469.4,367.2z" />
                                                <circle style="fill:#B44F2B;" cx="360.6" cy="333.2"
                                                    r="23.6" />
                                                <path style="fill:#E07D46;"
                                                    d="M427.4,162c-1.6-13.2-12.8-25.2-26.8-25.2H80.2c-6.4,0-12,6.8-12,13.2c0,6.4,5.2,12,12,12H427.4z" />
                                                <path style="fill:#DF5C4E;"
                                                    d="M205.4,204.8h100v-96h34.8L253,2.4l-87.2,106.4h39.6L205.4,204.8L205.4,204.8z" />
                                                <path
                                                    d="M303.4,210.8h-100c-2.4,0-4-1.6-4-4v-92h-29.6c-1.6,0-2.8-0.8-3.6-2.4c-0.8-1.2-0.4-3.2,0.4-4.4L253.8,1.6  c0.8-0.8,2-1.6,3.2-1.6s2.4,0.4,3.2,1.6l82,106.4c0.8,1.2,1.2,2.8,0.4,4.4s-2,2.4-3.6,2.4h-31.6v92  C307.4,209.2,305.8,210.8,303.4,210.8z M207.4,202.8h92v-92c0-2.4,1.6-4,4-4H331l-74-96l-78.8,96h25.2c2.4,0,4,1.6,4,4V202.8z" />
                                                <path
                                                    d="M432.6,506.8H71.4c-16.8,0-35.2-14.4-39.6-31.6c0-0.4,0-0.8,0-1.2V196.8c0-2.4,1.6-4,4-4s4,1.6,4,4v276.8  c3.6,13.2,18.8,25.2,31.6,25.2h361.2c13.2,0,18.8-12.4,18.8-24.4v-93.6c0-2.4,1.6-4,4-4s4,1.6,4,4v93.6  C459.4,493.6,448.2,506.8,432.6,506.8z" />
                                                <path
                                                    d="M201.4,182.8h-134c-17.6,0-36-2-36-25.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12,4,17.2,28,17.2h134c2.4,0,4,1.6,4,4  S203.8,182.8,201.4,182.8z" />
                                                <path
                                                    d="M455.4,296.8c-2.4,0-4-1.6-4-4v-93.2c0-12-5.2-16.8-18.8-16.8H305.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h127.2  c18,0,26.8,8,26.8,24.8v93.2C459.4,295.2,457.8,296.8,455.4,296.8z" />
                                                <path
                                                    d="M419,143.6c-2.4,0-4-1.6-4-4c0-12.8-4-16.8-17.2-16.8h-92.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h92.8c17.2,0,25.2,7.6,25.2,24.8  C423,141.6,421.4,143.6,419,143.6z" />
                                                <path
                                                    d="M35.4,416.8c-2.4,0-4-1.6-4-4V139.6c0-0.4,0-0.8,0-1.2c4.8-17.6,23.6-24,39.6-24h130.4c2.4,0,4,1.6,4,4s-1.6,4-4,4H71  c-12.8,0-28,4.4-31.6,17.6v272.8C39.4,415.2,37.8,416.8,35.4,416.8z" />
                                                <path
                                                    d="M455.4,276.8c-2.4,0-4-1.6-4-4V184c0-12.4-5.2-17.2-18.8-17.2H305.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h127.2  c18,0,26.8,8.4,26.8,25.2v88.8C459.4,275.2,457.8,276.8,455.4,276.8z" />
                                                <path
                                                    d="M201.4,166.8h-126c-8.8,0-14.4-10-14.4-19.6c0-10,6-16.4,14.4-16.4h126c2.4,0,4,1.6,4,4s-1.6,4-4,4h-126  c-5.6,0-6.4,5.2-6.4,8.4c0,5.6,2.8,11.6,6.4,11.6h126c2.4,0,4,1.6,4,4S203.8,166.8,201.4,166.8z" />
                                                <path
                                                    d="M427.8,162.8c-2,0-3.6-1.6-4-3.6c-1.2-10.8-13.6-20.4-26-20.4h-92.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h92.8  c16.4,0,32,12.8,34,27.6c0.4,2-1.2,4-3.6,4.4C428.2,162.8,428.2,162.8,427.8,162.8z" />
                                                <path
                                                    d="M457.8,382.8H329.4c-9.6,0-17.6-8-17.6-17.6v-52.4c0-9.6,8-17.6,17.6-17.6h128.4c9.6,0,17.6,8,17.6,17.6v52.4  C475.4,374.8,467.4,382.8,457.8,382.8z M329,302.8c-5.2,0-9.6,4.4-9.6,9.6v52.4c0,5.2,4.4,9.6,9.6,9.6h128.4c5.2,0,9.6-4.4,9.6-9.6  v-52.4c0-5.2-4.4-9.6-9.6-9.6H329z" />
                                                <path
                                                    d="M361,361.2c-15.6,0-28-12.8-28-28s12.8-28,28-28s28,12.4,28,28S376.2,361.2,361,361.2z M361,312.8c-11.2,0-20,9.2-20,20  c0,11.2,9.2,20,20,20c11.2,0,20-9.2,20-20S371.8,312.8,361,312.8z" />
                                                <path
                                                    d="M360.6,345.2c-6.8,0-12-5.2-12-12s5.2-12,12-12c2.4,0,4,1.6,4,4s-1.6,4-4,4s-4,1.6-4,4s1.6,4,4,4s4-1.6,4-4s1.6-4,4-4  s4,1.6,4,4C372.6,339.6,367.4,345.2,360.6,345.2z" />
                                                <path
                                                    d="M409.8,466.8H63.4c-17.6,0-31.6-14-31.6-31.6c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12.8,10.8,23.6,23.6,23.6h342.4l-0.8-78  c0-2.4,1.6-4,4-4l0,0c2,0,4,1.6,4,4l0.8,82c0,1.2-0.4,2-1.2,2.8C411.8,466.4,410.6,466.8,409.8,466.8z" />
                                                <path
                                                    d="M409.8,276.8C409.4,276.8,409.4,276.8,409.8,276.8c-2.4,0-4-2-4-4l0.4-50H65c-10,0-20,0-26.8-6.4  c-4.4-4.4-6.4-10.8-6.4-19.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,6.4,1.2,10.8,4,13.6c4.4,4.4,12.4,4.4,21.2,4.4h2.8h342.4  c1.2,0,2,0.4,2.8,1.2c0.8,0.8,1.2,1.6,1.2,2.8l-0.4,54C413.4,275.2,411.8,276.8,409.8,276.8z" />
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </span></span>
                                </td>
                                <td><span class="d-none">3077</span>530777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">PayPal</span>
                                    <span class="d-none">Non-expired</span>
                                    <span class="badge bg-label-success"> Paid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089RCI</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40">
                                            <i class="bx bx-cart" aria-hidden="true"></i>
                                        </span></span>
                                </td>
                                <td><span class="d-none">3077</span>530777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">Bank Transfer</span>
                                    <span class="d-none">Non-expired</span>
                                    <span class="badge bg-label-danger"> Unpaid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="invoice/preview">#5089RCI</a>
                                </td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-html="true"
                                        aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
                                        data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"><span
                                            class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40">
                                            <i class="bx bx-cart" aria-hidden="true"></i>
                                        </span></span>
                                </td>
                                <td><span class="d-none">3077</span>530777</td>
                                <td><span class="d-none">20200509</span>09 May 2020</td>
                                <td>
                                    <span class="d-none">Bank Transfer</span>
                                    <span class="d-none">Non-expired</span>
                                    <span class="badge bg-label-warning"> Unpaid </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Send Mail" data-bs-original-title="Send Mail">
                                            <i class="bx bx-paper-plane mx-1"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/app/invoice/preview" class="text-body"
                                            data-bs-toggle="tooltip" aria-label="Preview"
                                            data-bs-original-title="Preview">
                                            <i class="bx bx-show-alt mx-1"></i>
                                        </a>
                                        <a href="javascript:;" class="text-body" data-bs-toggle="tooltip"
                                            aria-label="Download" data-bs-original-title="Download">
                                            <i class="bx bx-download mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Invoice table -->
        </div>
        <!--/ User Content -->
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
