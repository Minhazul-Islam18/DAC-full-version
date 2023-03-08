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
        <div class="col-12">
            <h5 class="m-0">
                Withdrawal Request
            </h5>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Approvedd</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class='bx bx-check-circle'></i>
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
                            <span>Pending</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="fa-solid fa-hourglass-half"></i>
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
                            <span>Processing</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">19,860</h4>
                                <small class="text-danger">(-14%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="fa-solid fa-arrows-spin"></i>
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
                            <span>Paid</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20px" height="auto">
                                <path d="M9 19C9 19.75 8.79 20.46 8.42 21.06C7.73 22.22 6.46 23 5 23C3.54 23 2.27 22.22 1.58 21.06C1.21 20.46 1 19.75 1 19C1 16.79 2.79 15 5 15C7.21 15 9 16.79 9 19Z" stroke="#34af78" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.43945 19L4.42945 19.99L6.55946 18.02" stroke="#34af78" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path opacity="0.4" d="M17.7495 7.04997C17.5095 7.00997 17.2595 6.99998 16.9995 6.99998H6.99945C6.71945 6.99998 6.44945 7.01998 6.18945 7.05998C6.32945 6.77998 6.52945 6.52001 6.76945 6.28001L10.0195 3.02C11.3895 1.66 13.6095 1.66 14.9795 3.02L16.7295 4.78996C17.3695 5.41996 17.7095 6.21997 17.7495 7.04997Z" stroke="#ed9118" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 12V17C22 20 20 22 17 22H7.63C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15C3.8 15 2.73 15.53 2 16.36V12C2 9.28 3.64 7.38 6.19 7.06C6.45 7.02 6.72 7 7 7H17C17.26 7 17.51 7.00999 17.75 7.04999C20.33 7.34999 22 9.26 22 12Z" stroke="#34af78" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path opacity="1" d="M22 12.5H19C17.9 12.5 17 13.4 17 14.5C17 15.6 17.9 16.5 19 16.5H22" stroke="#ed9118" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
                            <span>Rejecteded</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="fa-regular fa-circle-xmark"></i>
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
                            <span>Suspendeded</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">237</h4>
                                <small class="text-success">(+42%)</small>
                            </div>
                            <small>Total Amount</small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="fa-solid fa-circle-pause"></i>
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
                        <select class="form-select" name="" id="">
                            <option selected>Payment Method</option>
                            <option value="">PayPal</option>
                            <option value="">Orange Money</option>
                            <option value="">Bank Transfer</option>
                            <option value="">Cash Payment</option>
                        </select>
                    </div> <div class="">
                        <select class="form-select" name="" id="">
                            <option selected>Payment Status</option>
                            <option value="">Approved</option>
                            <option value="">Suspended</option>
                            <option value="">Pending</option>
                            <option value="">Processing</option>
                            <option value="">Paid</option>
                            <option value="">Rejected</option>
                        </select>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover dt-responsive" id="withdrawal-list">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Request ID</th>
                        <th scope="col">Requesters (PO.)</th>
                        <th scope="col">Current Balance</th>
                        <th scope="col">Withdrawal Request</th>
                        <th scope="col">Desire method of Paymemt</th>
                        <th scope="col">Account Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Request ID</th>
                        <th scope="col">Requesters (PO.)</th>
                        <th scope="col">Current Balance</th>
                        <th scope="col">Withdrawal Request</th>
                        <th scope="col">Desire method of Paymemt</th>
                        <th scope="col">Account Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('withdrawal-profile') }}">
                                <span>049WRBFA</span></br><small> 20 Mar, 2023 </small>
                            </a>
                        </td>
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
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                        <span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>250 000</span>
                        </td>
                        <td>
                            <span>200 000</span>
                        </td>
                        <td>
                            <span class="text-info">
                                PayPal
                            </span>
                        </td>
                        <td>
                            <div class="mb-0">
                              <select style="color: #000" class=" form-select bg-success" name="" id="">
                                    <option selected>Approved</option>
                                    <option value="">Suspended</option>
                                    <option value="">Pending</option>
                                    <option value="">Processing</option>
                                    <option value="">Paid</option>
                                    <option value="">Rejected</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class='bx bxs-send'></i>
                                </a>
                                
                                <a href="{{ route('withdrawal-profile') }}" class="text-body" aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download"
                                    data-bs-original-title="Download">
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a href="{{ route('withdrawal-profile') }}">
                                <span><span>049WRBFA</span></br><small> 20 Mar, 2023 </small></span>
                            </a>
                        </td>
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
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                        <span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>480 000</span>
                        </td>
                        <td>
                            <span>350 000</span>
                        </td>
                        <td>
                            <span class="text-info">
                                Orange Money
                            </span>
                        </td>
                        <td>
                            <div class="mb-0">
                              <select style="color: #000" class=" form-select bg-danger" name="" id="">
                                    <option >Approved</option>
                                    <option value="">Suspended</option>
                                    <option value="">Pending</option>
                                    <option value="">Processing</option>
                                    <option value="">Paid</option>
                                    <option value="" selected>Rejected</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class='bx bxs-send'></i>
                                </a>
                                
                                <a href="{{ route('withdrawal-profile') }}" class="text-body" aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download"
                                    data-bs-original-title="Download"><i class='bx bx-download'></i></a>
                            </div>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a href="{{ route('withdrawal-profile') }}">
                                <span>049WRBFA</span></br><small> 20 Mar, 2023 </small>
                            </a>
                        </td>
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
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                        <span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>300 000</span>
                        </td>
                        <td>
                            <span>300 000</span>
                        </td>
                        <td>
                            <span class="text-info">
                                Bank Transfer
                            </span>
                        </td>
                        <td>
                            <div class="mb-0">
                              <select style="color: #000" class=" form-select bg-warning" name="" id="">
                                    <option >Approved</option>
                                    <option value="">Suspended</option>
                                    <option value="" selected>Pending</option>
                                    <option value="">Processing</option>
                                    <option value="">Paid</option>
                                    <option value="">Rejected</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class='bx bxs-send'></i>
                                </a>
                                
                                <a href="{{ route('withdrawal-profile') }}" class="text-body" aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download"
                                    data-bs-original-title="Download"><i class='bx bx-download'></i></a>
                            </div>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a href="{{ route('withdrawal-profile') }}">
                                <span>049WRBFA</span></br><small> 20 Mar, 2023 </small>
                            </a>
                        </td>
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
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                        <span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>15 00 000</span>
                        </td>
                        <td>
                            <span>20 00 000</span>
                        </td>
                        <td>
                            <span class="text-info">
                                PayPal
                            </span>
                        </td>
                        <td>
                            <div class="mb-0">
                              <select style="color: #000" class=" form-select bg-info" name="" id="">
                                    <option >Approved</option>
                                    <option value="">Suspended</option>
                                    <option value="">Pending</option>
                                    <option value="" selected>Processing</option>
                                    <option value="">Paid</option>
                                    <option value="">Rejected</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class='bx bxs-send'></i>
                                </a>
                                
                                <a href="{{ route('withdrawal-profile') }}" class="text-body" aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download"
                                    data-bs-original-title="Download"><i class='bx bx-download'></i></a>
                            </div>
                        </td>
                    </tr>                    <tr>
                        <td>
                            <a href="{{ route('withdrawal-profile') }}">
                                <span>049WRBFA</span></br><small> 20 Mar, 2023 </small>
                            </a>
                        </td>
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
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success" data-bs-toggle="modal"
                                            data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                        <span
                                        class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>275 000</span>
                        </td>
                        <td>
                            <span>275 000</span>
                        </td>
                        <td>
                            <span class="text-info">
                                PayPal
                            </span>
                        </td>
                        <td>
                            <div class="mb-0">
                              <select style="color: #000" class=" form-select bg-success" name="" id="">
                                    <option >Approved</option>
                                    <option value="">Suspended</option>
                                    <option value="">Pending</option>
                                    <option value="">Processing</option>
                                    <option value="" selected>Paid</option>
                                    <option value="">Rejected</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class='bx bxs-send'></i>
                                </a>
                                
                                <a href="{{ route('withdrawal-profile') }}" class="text-body" aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download"
                                    data-bs-original-title="Download"><i class='bx bx-download'></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addData" aria-labelledby="addDataLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Full name">
                            <label for="floatingInput">Full Name</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Company name">
                            <label for="floatingInput">Company Name</label>
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
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Telephone number">
                        <label for="floatingInput">Telephone number</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            <option value="Business">Business</option>
                            <option value="Enterprise">Enterprise</option>
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
@endsection
