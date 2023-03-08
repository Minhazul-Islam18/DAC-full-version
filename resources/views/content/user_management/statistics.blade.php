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
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    {{-- <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view-account.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user-connections.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/forms-pickers.js') }}"></script> --}}
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
                                <h5 class="mb-2">Violet Mendoza</h5>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                    <span class="badge bg-label-info">Computer</span>
                                    <span class="badge bg-white text-secondary badge-notifications">12</span>
                                </a>
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
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-task bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">1.23k</h5>
                                <span>CTD Paid to Postulate</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-task bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">568</h5>
                                <span>CTD Paid to Consult</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Username:</span>
                                <span>violet.dev</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Email:</span>
                                <span>vafgot@vultukir.org</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Type of Company:</span>
                                <span>SARL</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">IFU Number or equivalent:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">RCCM Number or equivalent:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Contact:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Company website:</span>
                                <span>www.xyz.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Company address:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Aliquam, laboriosam.</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Company short bio:</span>
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
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/account') }}"><i
                            class="bx bx-user me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/security') }}"><i
                            class="bx bx-lock-alt me-1"></i>Security</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/billing') }}"><i
                            class='bx bx-wallet me-1'></i>Wallet & Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/notifications') }}"><i
                            class="bx bx-bell me-1"></i>Notifications</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/connections') }}"><i
                            class="bx bx-link-alt me-1"></i>Connections</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class='bx bx-stats'></i>Expenses statistics</a></li>
            </ul>
            <hr>
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Expenses / Paid to postulate</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19,860</h4>
                                        <small class="text-success">(+14%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-info rounded p-2">
                                    <svg fill="#000000" viewBox="0 0 24 24" id="cart-check" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color" height="auto" width="1.30rem">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                        
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                        
                                        <g id="SVGRepo_iconCarrier">
                                        
                                        <path id="secondary" d="M18.5,20.5A1.5,1.5,0,1,1,17,19,1.5,1.5,0,0,1,18.5,20.5ZM11,19a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,11,19Zm3.71-9.29,4-4a1,1,0,1,0-1.42-1.42L14,7.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0Z" style="fill: #2ca9bc;"/>
                                        
                                        <path id="primary" d="M18.22,17H9.8a2,2,0,0,1-2-1.55L5.2,4H3A1,1,0,0,1,3,2H5.2a2,2,0,0,1,2,1.55L9.8,15h8.42L20,7.76A1,1,0,0,1,22,8.24l-1.81,7.25A2,2,0,0,1,18.22,17Z" style="fill: #39da8a;"/>
                                        
                                        </g>
                                        
                                        </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Expenses / Paid to Consult</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">4,567</h4>
                                        <small class="text-success">(+18%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-info rounded p-2">
                                    <i class='bx bxs-file-find'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Expenses /</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19,860</h4>
                                        <small class="text-success">(+14%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-info rounded p-2">
                                    <i class='bx bxs-wallet'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header pb-0">
                    Expenses statistics (F CFA)
                </div>
                <div class="card-body">
                    <!-- Range Picker-->
                    <div class="row border-bottom">
                        <div class="col-md-6 col-12 pb-4">
                            <label for="bs-rangepicker-range" class="form-label">Ranges</label>
                            <input type="text" id="bs-rangepicker-range" class="form-control" />
                        </div>
                    </div>
                    <!-- /Range Picker-->
                    <div class="container-fluid p-0 earning-stat">
                        <div class="row my-3">
                            <div class="col-md-8 d-flex">
                                <span class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40 me-2"><i
                                        class="fa-solid fa-sack-dollar"></i></span>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold h6 mb-1">Balance</div>
                                    <small>Current</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-end d-block">78000</span>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-8 d-flex">
                                <span class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40 me-2">
                                    <svg fill="#000000" viewBox="0 0 24 24" id="cart-check" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color" height="auto" width="1.30rem">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                        
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                        
                                        <g id="SVGRepo_iconCarrier">
                                        
                                        <path id="secondary" d="M18.5,20.5A1.5,1.5,0,1,1,17,19,1.5,1.5,0,0,1,18.5,20.5ZM11,19a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,11,19Zm3.71-9.29,4-4a1,1,0,1,0-1.42-1.42L14,7.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0Z" style="fill: #2ca9bc;"/>
                                        
                                        <path id="primary" d="M18.22,17H9.8a2,2,0,0,1-2-1.55L5.2,4H3A1,1,0,0,1,3,2H5.2a2,2,0,0,1,2,1.55L9.8,15h8.42L20,7.76A1,1,0,0,1,22,8.24l-1.81,7.25A2,2,0,0,1,18.22,17Z" style="fill: #ee941c;"/>
                                        
                                        </g>
                                        
                                        </svg>
                                </span>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold h6 mb-1">Total expenses on Payments for Cal for Tender Documents (CTD)</div>
                                    <small>57 CTD's Purchased for Appling Tenders</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-end d-block">78000</span>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-8 d-flex">
                                <span class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40 me-2"> 
                                    <i class='bx bxs-file-find'></i>
                                </span>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold h6 mb-1">Total Expenses on Payments for CTD Consultations</div>
                                    <small>89 CTD's Purchased for Consulting</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-end d-block">78000</span>
                            </div>
                        </div>
                         <div class="row my-3">
                            <div class="col-md-8 d-flex">
                                <span class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40 me-2"> 
                                    <i class='bx bxs-wallet'></i>
                                </span>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold h6 mb-1">Total Cost</div>
                                    <small>Total Expenses</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-end d-block">78000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ User Content -->
    </div>
@endsection
