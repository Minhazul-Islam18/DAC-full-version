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
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/po/account') }}"><i
                            class="bx bx-user me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
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
            <!-- Change Password -->
            <div class="card mb-4">
                <h5 class="card-header">Change Password</h5>
                <div class="card-body">
                    <form id="formChangePassword" method="POST" onsubmit="return false">
                        <div class="alert alert-warning" role="alert">
                            <h6 class="alert-heading mb-1">Ensure that these requirements are met</h6>
                            <span>Minimum 8 characters long, uppercase & symbol</span>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                <label class="form-label" for="newPassword">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="newPassword" name="newPassword"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" name="confirmPassword"
                                        id="confirmPassword"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary me-2">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ Change Password -->

            <!-- Two-steps verification -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-2">Two-steps verification</h5>
                    <span class="card-subtitle">Keep your account secure with authentication step.</span>
                </div>
                <div class="card-body">
                    <h6>SMS</h6>
                    <div class="d-flex justify-content-between border-bottom mb-4 pb-2">
                        <span>+1(968) 945-8832</span>
                        <div class="action-icons">
                            <a href="javascript:;" class="text-body me-1" data-bs-target="#enableOTP"
                                data-bs-toggle="modal"><i class="bx bx-edit"></i></a>
                            <a href="javascript:;" class="text-body"><i class="bx bx-trash-alt"></i></a>
                        </div>
                    </div>
                    <p class="mb-0">Two-factor authentication adds an additional layer of security to your account by
                        requiring more than just a password to log in.
                        <a href="javascript:void(0);" class="text-body">Learn more.</a>
                    </p>
                </div>
            </div>
            <!--/ Two-steps verification -->

            <!-- Recent Devices -->
            <div class="card">
                <h5 class="card-header">Recent Devices</h5>
                <div class="table-responsive">
                    <table class="table border-top">
                        <thead>
                            <tr>
                                <th class="text-truncate">Browser</th>
                                <th class="text-truncate">Device</th>
                                <th class="text-truncate">Location</th>
                                <th class="text-truncate">Recent Activities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate"><i class='bx bxl-windows text-info me-3'></i> <span
                                        class="fw-semibold">Chrome on Windows</span></td>
                                <td class="text-truncate">HP Spectre 360</td>
                                <td class="text-truncate">Switzerland</td>
                                <td class="text-truncate">10, July 2021 20:07</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class='bx bx-mobile-alt text-danger me-3'></i> <span
                                        class="fw-semibold">Chrome on iPhone</span></td>
                                <td class="text-truncate">iPhone 12x</td>
                                <td class="text-truncate">Australia</td>
                                <td class="text-truncate">13, July 2021 10:10</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class='bx bxl-android text-success me-3'></i> <span
                                        class="fw-semibold">Chrome on Android</span></td>
                                <td class="text-truncate">Oneplus 9 Pro</td>
                                <td class="text-truncate">Dubai</td>
                                <td class="text-truncate">14, July 2021 15:15</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class='bx bxl-apple me-3'></i> <span
                                        class="fw-semibold">Chrome on MacOS</span></td>
                                <td class="text-truncate">Apple iMac</td>
                                <td class="text-truncate">India</td>
                                <td class="text-truncate">16, July 2021 16:17</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><i class='bx bxl-windows text-info me-3'></i> <span
                                        class="fw-semibold">Chrome on Windows</span></td>
                                <td class="text-truncate">HP Spectre 360</td>
                                <td class="text-truncate">Switzerland</td>
                                <td class="text-truncate">20, July 2021 21:01</td>
                            </tr>
                            <tr>
                                <td class="text-truncate border-bottom-0"><i class='bx bxl-android text-success me-3'></i>
                                    <span class="fw-semibold">Chrome on Android</span>
                                </td>
                                <td class="text-truncate border-bottom-0">Oneplus 9 Pro</td>
                                <td class="text-truncate border-bottom-0">Dubai</td>
                                <td class="text-truncate border-bottom-0">21, July 2021 12:22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Recent Devices -->
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
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Consortium of Company:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            Company 1
                                            <br>
                                            Company 2
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
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
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
                                    <div class="row border-bottom py-2">
                                        <div class="col-md-6">
                                            Consortium of Company:
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            Company 1
                                            <br>
                                            Company 2
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
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Pay to Postulate</button>
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
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Send mail</button>
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
                                    Total:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="fw-bold pb-1 border-bottom">55000 F CFA</div>
                                </div>
                            </div>
                            <div class="row mt-4 py-2 border-top border-bottom">
                                <div class="col-12 text-center">
                                    <div class="d-flex flex-column align-item-center justify-content-center">
                                        <a href="#">
                                            <h6 class="mb-1">Invoice</h6>
                                            <i class='bx bx-download'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Pay to Postulate</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-primary">See more</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Create App Modal -->
        </div>
        <!--/ User Content -->
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
