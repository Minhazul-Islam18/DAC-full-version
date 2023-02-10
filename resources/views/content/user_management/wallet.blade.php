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
    <script src="{{ asset('assets/js/user-view-wallet.js') }}"></script>
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
            <ul class="nav nav-pills flex-column flex-md-row mb-3 g-4">
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/account') }}"><i
                            class="bx bx-user me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/security') }}"><i
                            class="bx bx-lock-alt me-1"></i>Security</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class='bx bx-wallet me-1'></i>Wallet & Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/notifications') }}"><i
                            class="bx bx-bell me-1"></i>Notifications</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/connections') }}"><i
                            class="bx bx-link-alt me-1"></i>Connections</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/view/statistics') }}"><i
                            class='bx bx-stats'></i>Expenses statistics</a></li>
            </ul>
            <hr>
            <!-- Current Plan -->
            <div class="card mb-4">
                <h5 class="card-header">Current Plan</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 order-1 order-xl-0">
                            <div class="mb-4">
                                <h6 class="mb-1">Your Current Plan is Basic</h6>
                                <p>A simple start for everyone</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1">Active until Dec 09, 2021</h6>
                                <p>We will send you a notification upon Subscription expiration</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1"><span class="me-2">$199 Per Month</span> <span
                                        class="badge bg-label-primary">Popular</span></h6>
                                <p>Standard plan for small to medium businesses</p>
                            </div>
                        </div>
                        <div class="col-xl-6 order-0 order-xl-0">
                            <div class="alert alert-warning mb-4" role="alert">
                                <h6 class="alert-heading mb-1">We need your attention!</h6>
                                <span>Your plan requires update</span>
                            </div>
                            <div class="plan-statistics">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-2">Days</h6>
                                    <h6 class="mb-2">24 of 30 Days</h6>
                                </div>
                                <div class="progress mb-1">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>6 days remaining until your plan requires update</p>
                            </div>
                        </div>
                        <div class="col-12 order-2 order-xl-0">
                            <button class="btn btn-primary me-2 my-2" data-bs-toggle="modal"
                                data-bs-target="#upgradePlanModal">Upgrade Plan</button>
                            <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Current Plan -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Balance</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">21,459</h4>
                                        <small class="text-success">(+29%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                                    <i class="fa-solid fa-sack-dollar"></i>
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
                                    <span>Debit</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19,860</h4>
                                        <small class="text-danger">(-14%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-danger rounded p-2">
                                    <img src="{{ asset('assets/img/icons/misc/wallet-out.png') }}" alt=""
                                        style="width: 1.32em">
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
                                    <span>Credit</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">4,567</h4>
                                        <small class="text-success">(+18%)</small>
                                    </div>
                                </div>
                                <span class="badge bg-label-success rounded p-2">
                                    <img src="{{ asset('assets/img/icons/misc/wallet-in.png') }}" alt=""
                                        style="width: 1.32em">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-header ps-0">Wallet movements</h6>
                    <div class="table-responsive mb-3">
                        <div class="filterable">
                            <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                                <div class="title-filter">
                                    <select name="userPurpose" id="userPurpose" class="form-select userPurpose">
                                        <option value="" selected="">Payment Purpose</option>
                                        <option value="Parchase">Parchase</option>
                                        <option value="Deposit">Deposit</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                                <div class="">
                                    <select name="userPayMethod" id="userPayMethod" class="form-select userPayMethod">
                                        <option value="" selected="">Payment Method</option>
                                        <option value="PayPal">PayPal</option>
                                        <option value="Wallet">Wallet</option>
                                        <option value="Credit card">Credit card</option>
                                        <option value="Orange Money">Orange Money</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover dt-responsive dataTableUwallet"
                            id="dataTableUwallet">
                            <caption class="sr-only"></caption>
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Payment Purpose</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Debit F/CFA</th>
                                    <th scope="col">Credit F/CFA</th>
                                    <th scope="col">Ballance</th>
                                </tr>
                            </thead>
                            <tfoot class="hidden">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Payment Purpose</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Debit F/CFA</th>
                                    <th scope="col">Credit F/CFA</th>
                                    <th scope="col">Ballance</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089BFA </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Purchase</span>
                                    </td>
                                    <td>
                                        <span>Wallet</span>
                                    </td>
                                    <td>
                                        <span class="text-danger">12,500</span>
                                    </td>
                                    <td>
                                        <span class="text-gray"> --- </span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089WD </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Deposit</span>
                                    </td>
                                    <td>
                                        <span>PayPal</span>
                                    </td>
                                    <td>
                                        <span class=""> --- </span>
                                    </td>
                                    <td>
                                        <span class="text-success">12,500</span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089WT </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Transfer</span>
                                    </td>
                                    <td>
                                        <span>Wallet</span>
                                    </td>
                                    <td>
                                        <span class="text-danger">12,500</span>
                                    </td>
                                    <td>
                                        <span class="text-gray"> --- </span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089WD </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Deposit</span>
                                    </td>
                                    <td>
                                        <span>Credit card</span>
                                    </td>
                                    <td>
                                        <span class=""> --- </span>
                                    </td>
                                    <td>
                                        <span class="text-success">12,500</span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089RCI </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Purchase</span>
                                    </td>
                                    <td>
                                        <span>Wallet</span>
                                    </td>
                                    <td>
                                        <span class="text-danger">12,500</span>
                                    </td>
                                    <td>
                                        <span class="text-gray"> --- </span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089WD </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Deposit</span>
                                    </td>
                                    <td>
                                        <span>Credit card</span>
                                    </td>
                                    <td>
                                        <span class=""> --- </span>
                                    </td>
                                    <td>
                                        <span class="text-success">12,500</span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="d-flex flex-column">
                                                <a href="" class=""> #5089WD </a>
                                                <span>20 May, 2022</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>Deposit</span>
                                    </td>
                                    <td>
                                        <span>Orange Money</span>
                                    </td>
                                    <td>
                                        <span class=""> --- </span>
                                    </td>
                                    <td>
                                        <span class="text-success">12,500</span>
                                    </td>
                                    <td>
                                        <span class=""> 28,800 </span>
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
