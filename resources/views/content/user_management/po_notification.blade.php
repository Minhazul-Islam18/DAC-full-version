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
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="bx bx-bell me-1"></i>Notifications</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/connections') }}"><i
                            class="bx bx-link-alt me-1"></i>Connections</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/statistics') }}"><i
                            class='bx bx-stats me-1'></i>Earn statistics</a></li>
            </ul>
            <hr>
            <!-- Project table -->
            <div class="card">
                <!-- Notifications -->
                <h5 class="card-header">Recent Devices</h5>
                <div class="card-body border-bottom">
                    <span>Change to notification settings, the user will get the update</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th class="text-nowrap">Type</th>
                                <th class="text-nowrap text-center">✉️ Email</th>
                                <th class="text-nowrap text-center">🖥 Browser</th>
                                <th class="text-nowrap text-center">👩🏻‍💻 App</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Message Received</h6>
                                    <small>Messages from users</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Account activity</h6>
                                    <small>Be Notified of any activity on your account</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">A new browser used to sign in</h6>
                                    <small>Be notified when a new browser used to sign in to your account. </small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">A new device is linked</h6>
                                    <small>Be notified when a new device is linked on your account.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Document Sold</h6>
                                    <small>Be notified every time you sold a document.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Upload Completed</h6>
                                    <small>Be notified when you completed an Upload.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Wallet deposit</h6>
                                    <small>Be notified when payment deposit in your account.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Withdraw request</h6>
                                    <small>Be notified when you completed a Withdraw request.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <h6 class="fw-bold mb-1">Newsletter</h6>
                                    <small>Receive digital newsletter from DAC-Rapide.</small>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-label-secondary">Discard</button>
                </div>
                <!-- /Notifications -->
            </div>
            <!-- /Project table -->
        </div>
        <!--/ User Content -->
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
