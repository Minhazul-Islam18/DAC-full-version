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

    @switch($earner)
        @case('administrator')
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
                                    <span class="badge bg-label-info">
                                        Finnance Administrator</span>
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
                        <h5 class="pt-3 pb-2 border-bottom mb-4">About</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bx-user-circle me-2'></i>Full Name:</span>
                                    <span>Yabre Mohammad</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bxs-check-circle me-2 text-success'></i>Status:</span>
                                    <span>Active</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bxs-star me-2 text-warning'></i>Role:</span>
                                    <span>Finnance Administrator</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bxs-flag-alt me-2'></i>Country:</span>
                                    <span>USA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bx-globe me-2'></i>Language:</span>
                                    <span>English</span>
                                </li>
                            </ul>
                        </div>
                        <h5 class="pt-3 pb-2 border-bottom mb-4">Details</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bx-phone me-2'></i>Phone:</span>
                                    <span>+0123456789</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bxl-skype me-2'></i>Skype:</span>
                                    <span>jhon.doe</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="fw-bold"><i class='bx bxl-whatsapp me-2'></i>Whatsapp:</span>
                                    <span>xxxxxxxxxx</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->
    
            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- Plan Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-md-2">
                                <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-center">Earning ID</h4>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="alert alert-secondary my-3" role="alert">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                        </div>
                        <div class="lot-info">
                            <h6 class="mb-2 mt-4">Lot 1</h6>
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
                                        <span class="fw-bold">CTD Price:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <span>55000 F CFA</span>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">Earning of DAC-Rapide:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        5500 F CFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lot-info">
                            <h6 class="mb-2 mt-4">Lot 2</h6>
                            <div class="border container-fluid" style="border-radius: .2rem">
                                <div class="row border-bottom py-2">
                                    <div class="col-md-2">
                                        Title
                                    </div>
                                    <div class="col-md-10">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </p>
    
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">CTD Price:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <span>55000 F CFA</span>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">Earning of DAC-Rapide:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        5500 F CFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2 border-bottom">
                            <div class="col-6">
                                <span class="fw-bold">Total Earning:</span>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span class="fw-bold pb-1 border-bottom">110 000 F CFA</span>
                            </div>
                        </div>
                        <div class="row py-2 border-bottom">
                            <div class="col-6">
                                <span class="fw-bold">Current Ballance (F CFA):</span>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span class="fw-bold pb-1 border-bottom">150 000 F CFA</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="m-0 pt-3 pb-2">Earning Source Info</h6>
                                <ul class="p-0 m-0">
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Payment received from
                                        </div>
                                        <a href="#">COGEA International</a>
                                    </li>
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Date of Payment</div>
                                        <span>30 Mar, 2022</span>
                                    </li>
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Tel
                                        </div>
                                        <a href="#">xxxxxxxxxx</a>
                                    </li>
                                    <li class="d-flex justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Email ID</div>
                                        <span>xxxxxxxxxx</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
                <!-- Plan Card -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="m-0 text-center">Last Earnings</h4>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="p-0 m-0">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <a href="#">125EDRBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <a href="#">125EDRBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <a href="#">125EDRBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-top">
                        <a href="javascript:void(0)" class="d-flex justify-content-center">Load More</a>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
            <!--/ User Content -->
        </div>
            @break
        @case('po')
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
                <!-- Plan Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-md-2">
                                <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-center">Earning ID</h4>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="alert alert-secondary my-3" role="alert">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                                mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                        </div>
                        <div class="lot-info">
                            <h6 class="mb-2 mt-4">Lot 1</h6>
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
                                        <span class="fw-bold">CTD Price:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <span>55000 F CFA</span>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">Earning of DAC-Rapide:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        5500 F CFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lot-info">
                            <h6 class="mb-2 mt-4">Lot 2</h6>
                            <div class="border container-fluid" style="border-radius: .2rem">
                                <div class="row border-bottom py-2">
                                    <div class="col-md-2">
                                        Title
                                    </div>
                                    <div class="col-md-10">
                                        <p class="">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </p>
    
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">CTD Price:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <span>55000 F CFA</span>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <span class="fw-bold">Earning of DAC-Rapide:</span>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        5500 F CFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2 border-bottom">
                            <div class="col-6">
                                <span class="fw-bold">Total Earning:</span>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span class="fw-bold pb-1 border-bottom">110 000 F CFA</span>
                            </div>
                        </div>
                        <div class="row py-2 border-bottom">
                            <div class="col-6">
                                <span class="fw-bold">Current Ballance (F CFA):</span>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <span class="fw-bold pb-1 border-bottom">150 000 F CFA</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="m-0 pt-3 pb-2">Earning Source Info</h6>
                                <ul class="p-0 m-0">
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Payment received from
                                        </div>
                                        <a href="#">DAC-Rapide</a>
                                    </li>
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Date of Payment</div>
                                        <span>30 Mar, 2022</span>
                                    </li>
                                    <li class="d-flex border-bottom justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Tel
                                        </div>
                                        <a href="#">xxxxxxxxxx</a>
                                    </li>
                                    <li class="d-flex justify-content-between p-2">
                                        <div class="d-flex">
                                            <i class='bx bxs-check-circle me-2 text-success'></i>Email ID</div>
                                        <span>xxxxxxxxxx</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
                <!-- Plan Card -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="m-0 text-center">Last Earnings</h4>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="p-0 m-0">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <a href="#">125EPOBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <a href="#">125EPOBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <a href="#">125EPOBFA</a>
                                <span>
                                    75000 at 23/09/2023, 08:30PM
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-top">
                        <a href="javascript:void(0)" class="d-flex justify-content-center">Load More</a>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
            <!--/ User Content -->
        </div>
            @break
        @default
            
    @endswitch


    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
