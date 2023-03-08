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
        <div class="col-xl-5 col-lg-5 col-md-5">
            <div class="card">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Withdraw Request list</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <ul class="m-0 p-0">
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>Ballance (F CFA)</span>
                            <span>175 00 000</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>Amount Requested(F CFA)</span>
                            <span>75 00 000</span>
                        </li>     
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>Requested date</span>
                            <span>12/09/2023, 12:50PM</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex flex-column">
                           <div class="d-flex justify-content-between mb-3 pt-3 pb-2">
                            <span class="fw-bold">Desired Payment method</span>
                            <span>Bank Account</span>
                           </div>
                           <ul class="p-0">
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Bank Name:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Bank Code:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Brance Code:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>IBAN Code:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Swift Code:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Bank Account number:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                           </ul>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex flex-column">
                           <div class="d-flex justify-content-between mb-3 pt-3 pb-1">
                            <span class="fw-bold">Request Status</span>
                            <span>Approved 23/04/2023</span>
                           </div>
                           <ul class="p-0">
                            <li class="d-flex justify-content-between pb-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Approving Admin:
                                </span>
                                <span>Yabre Mohammad</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Tel:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>E-mail ID:
                                </span>
                                <span>xxxxxxxxxxxxx</span>
                            </li>
                           </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Others Unprocessed request</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <ul class="m-0 p-0">
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                    </ul>
                </div>
            </div>            
            <div class="card mt-3">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Last Paid requests</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <ul class="m-0 p-0">
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WRBFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ User Content -->
        <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="card">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Actions</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <a href="http://127.0.0.1:8000/admin/ctd/preview">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fa-regular fa-hourglass-half me-2"></i>Pending
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/edit">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fa-solid fa-arrows-spin me-2"></i>Processing
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/preview">
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fa-solid fa-circle-check me-2"></i>Approved
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/edit">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fa-solid fa-arrows-spin me-2"></i>Rejected
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/preview">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fa-solid fa-circle-pause me-2"></i>Suspended
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/edit">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <svg style="margin-right: .5rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20px" height="auto">
                                    <path d="M9 19C9 19.75 8.79 20.46 8.42 21.06C7.73 22.22 6.46 23 5 23C3.54 23 2.27 22.22 1.58 21.06C1.21 20.46 1 19.75 1 19C1 16.79 2.79 15 5 15C7.21 15 9 16.79 9 19Z" stroke="#34af78" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3.43945 19L4.42945 19.99L6.55946 18.02" stroke="#34af78" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path opacity="0.4" d="M17.7495 7.04997C17.5095 7.00997 17.2595 6.99998 16.9995 6.99998H6.99945C6.71945 6.99998 6.44945 7.01998 6.18945 7.05998C6.32945 6.77998 6.52945 6.52001 6.76945 6.28001L10.0195 3.02C11.3895 1.66 13.6095 1.66 14.9795 3.02L16.7295 4.78996C17.3695 5.41996 17.7095 6.21997 17.7495 7.04997Z" stroke="#ed9118" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 12V17C22 20 20 22 17 22H7.63C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15C3.8 15 2.73 15.53 2 16.36V12C2 9.28 3.64 7.38 6.19 7.06C6.45 7.02 6.72 7 7 7H17C17.26 7 17.51 7.00999 17.75 7.04999C20.33 7.34999 22 9.26 22 12Z" stroke="#34af78" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path opacity="1" d="M22 12.5H19C17.9 12.5 17 13.4 17 14.5C17 15.6 17.9 16.5 19 16.5H22" stroke="#ed9118" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg> Paid
                            </span>
                        </button>
                    </a>
                    <button class="btn btn-label-secondary d-grid w-100 mb-3">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-download me-2"></i>Download Invoice
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
