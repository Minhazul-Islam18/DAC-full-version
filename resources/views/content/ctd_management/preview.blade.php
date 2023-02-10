@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/ctd-management.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script> --}}
@endsection

@section('content')
    <div class="row gy-3">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header border-bottom mb-2">
                    <span class="d-block text-center">Preview 6 out 189 pages</span>
                </div>
                <div class="card-body">
                    <canvas id="image"></canvas>
                    <defs>
                        <g id="pin">
                            <circle cx="0" cy="0" r="7" fill="white" stroke="green"
                                stroke-width="2" />
                        </g>
                    </defs>
                </div>
                <div class="card-footer border-top">
                    <div class="d-block text-end">
                        <a href="#" class="">
                            <i class='bx bxs-copyright me-2'></i> Report
                            Copyright
                            violation</a>
                    </div>
                </div>
            </div>
            <div class="card mt-md-4 mt-sm-2 mt-2">
                <div class="mb-md-3 mb-sm-2 border-bottom card-header pt-3 pb-3">
                    <h4 class="m-0 text-center"> Reviews <span class="h6">(2)</span> </h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row g-0 p-0">
                            <div class="col-md-12">
                                <div class="blog-comment">
                                    <ul class="comments">
                                        <li class="row g-0">
                                            <div class="col-2">
                                                <div class="avatar avatar-md me-2">
                                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="post-comments">
                                                    <p class="meta">Dec 18, 2022 <a href="#">JohnDoe</a> says : <i
                                                            class="pull-right"><a
                                                                href="#"><small>Reply</small></a></i>
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Etiam a sapien odio, sit amet
                                                    </p>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="row g-0">
                                            <div class="col-2">
                                                <div class="avatar avatar-md me-2">
                                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="post-comments">
                                                    <p class="meta">Dec 19, 2022 <a href="#">JohnDoe</a> says : <i
                                                            class="pull-right"><a
                                                                href="#"><small>Reply</small></a></i>
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Etiam a sapien odio, sit amet
                                                    </p>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col-2">
                                                        <div class="avatar avatar-md me-2">
                                                            <img src="{{ asset('assets/img/avatars/5.png') }}"
                                                                alt="Avatar" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="post-comments">
                                                            <p class="meta">Jan 20, 2023 <a href="#">JohnDoe</a>
                                                                says :
                                                                <i class="pull-right"><a
                                                                        href="#"><small>Reply</small></a></i>
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Etiam a sapien odio, sit amet
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row gx-1">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header pt-3 pb-2 py-2 border-bottom">
                            <h5 class="m-0 text-center">Actions</h5>
                        </div>
                        <div class="card-body px-3 py-3">
                            <a href="{{ route('ctd-preview') }}">
                                <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#sendInvoiceOffcanvas">
                                    <span class="d-flex align-items-center justify-content-center text-nowrap">
                                        <i class="bx bx-show me-1"></i>Preview
                                    </span>
                                </button>
                            </a>
                            <a href="{{ route('ctd-edit') }}">
                                <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#sendInvoiceOffcanvas">
                                    <span class="d-flex align-items-center justify-content-center text-nowrap">
                                        <i class="bx bx-edit me-1"></i>Edit
                                    </span>
                                </button>
                            </a>
                            <button class="btn btn-label-secondary d-grid w-100 mb-3" id="confirm-text">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    Disable
                                </span>
                            </button>
                            <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    <i class='bx bx-send'></i>Send Mail
                                </span>
                            </button>
                            <button class="btn btn-label-secondary d-grid w-100 mb-3">
                                <span class="d-flex align-items-center justify-content-center text-nowrap">
                                    <i class='bx bx-download'></i>Download
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header pt-3 pb-2 py-2 border-bottom">
                            <h5 class="m-0 text-center">Price Infos</h5>
                        </div>
                        <div class="card-body px-3 py-3">
                            <ul class="m-0 p-0" style="list-style: none">
                                <li class="border-bottom d-flex row-wrap justify-content-between px-2 py-1">
                                    <small>Pay to Consult</small>
                                    <small>89000 F CFA</small>
                                </li>
                                <li class="border-bottom d-flex row-wrap justify-content-between px-2 py-1">
                                    <small>Pay to Postulate</small>
                                    <small>590000 F CFA</small>
                                </li>
                                <li>
                                    <ul class="p-0">
                                        <li class="ps-3 border-bottom d-flex row-wrap justify-content-between px-2 py-1">
                                            <small class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="auto"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgb(17, 157, 5);transform: ;msFilter:;background: #fff0f0;border-radius: 50%;margin-right: .2rem;">
                                                    <path
                                                        d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                    </path>
                                                </svg>Lot 1</small>
                                            <small>89000 F CFA</small>
                                        </li>
                                        <li class="ps-3 border-bottom d-flex row-wrap justify-content-between px-2 py-1">
                                            <small>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="auto"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgb(17, 157, 5);transform: ;msFilter:;background: #fff0f0;border-radius: 50%;margin-right: .2rem;">
                                                    <path
                                                        d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                    </path>
                                                </svg>
                                                Lot 2</small>
                                            <small>89000 F CFA</small>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pt-md-2 pb-0 text-center">
                                    <a href="#"><i class="fa-solid fa-circle-question"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-md-4 py-sm-3">
                    <div class="card">
                        <div class="card-body">
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
                                    <div class="row border-bottom g-0 py-2">
                                        <div class="col-md-2">
                                            <span class="fw-bold">
                                                Title
                                            </span>

                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2 g-0">
                                        <div class="col-md-6">
                                            <span class="fw-bold">Total:
                                            </span>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            55000 F CFA
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lot-info">
                                <h6 class="mb-1 mt-4">Lot 2</h6>
                                <div class="border container-fluid" style="border-radius: .2rem">
                                    <div class="row border-bottom g-0 py-2">
                                        <div class="col-md-2">
                                            <span class="fw-bold">
                                                Title</span>
                                        </div>
                                        <div class="col-md-10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                            consequuntur
                                            accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                            earum
                                            illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                        </div>
                                    </div>
                                    <div class="row py-2 g-0">
                                        <div class="col-md-6">
                                            <span class="fw-bold">Total:
                                            </span>
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
                                <div class="row my-3 flex-wrap gy-2 gx-2">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-info">
                                                        <i class="bx bx-download fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-wrap">Downloads</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-info">
                                                        <i class="fa-regular fa-eye fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-wrap">Views</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-warning">
                                                        <i class="fa-solid fa-cart-shopping fs-4"></i>
                                                    </span>
                                                </div>
                                                <span class="d-block text-wrap">Cart list</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body text-center">
                                                <div class="avatar mx-auto mb-2">
                                                    <span class="avatar-initial rounded-circle bg-label-success">
                                                        <img src="{{ asset('assets/img/icons/misc/eye-tick.png') }}"
                                                            alt="" style="width: 22px;height: auto;">
                                                    </span>
                                                </div>
                                                <span class="d-block text-wrap">Paid to Consult</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <span class="d-block text-wrap">Wishlist</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
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
                                                <span class="d-block text-wrap">Paid to Postulate</span>
                                                <h2 class="mb-0">65</h2>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pt-3 pb-2 py-2 border-bottom">
                        <h5 class="m-0 text-center">Seller Details</h5>
                    </div>
                    <div class="card-body px-3 py-3">
                        <div class="row">
                            <div class="col-3">
                                <div class="avatar avatar-md me-2">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                        class="rounded-circle">
                                </div>
                            </div>
                            <div class="col-9 d-flex flex-column">
                                <h5 class="border-bottom m-0 py-1">Yabre Mohamed</h5>
                                <span class="border-bottom py-1">30 Documents uploaded.</span>
                                <span class="border-bottom py-1">16 Documents sold.</span>
                            </div>
                            <div class="col-12">
                                <div class="mt-md-4 mt-sm-2 d-flex justify-content-center align-items-center flex-column">
                                    <div class="w-100 border-bottom d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="review-count">12 Reviews</h5>
                                    </div>

                                    <div class="w-100 mt-1 d-flex justify-content-between align-items-center"
                                        style="gap: 2%">
                                        <div class="small-ratings d-flex">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                        </div>
                                        <div class="progress w-100">
                                            <div class="progress-bar w-10" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="review-stat">1</h5>
                                    </div>
                                    <div class="w-100 mt-1 d-flex justify-content-between align-items-center"
                                        style="gap: 2%">
                                        <div class="small-ratings d-flex">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="progress w-100">
                                            <div class="progress-bar w-25" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="review-stat">2</h5>
                                    </div>
                                    <div class="w-100 mt-1 d-flex justify-content-between align-items-center"
                                        style="gap: 2%">
                                        <div class="small-ratings d-flex">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="progress w-100">
                                            <div class="progress-bar w-40" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="review-stat">3</h5>
                                    </div>
                                    <div class="w-100 mt-1 d-flex justify-content-between align-items-center"
                                        style="gap: 2%">
                                        <div class="small-ratings d-flex">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="progress w-100">
                                            <div class="progress-bar w-50" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="review-stat">6</h5>
                                    </div>
                                    <div class="w-100 mt-1 d-flex justify-content-between align-items-center"
                                        style="gap: 2%">
                                        <div class="small-ratings d-flex">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="progress w-100">
                                            <div class="progress-bar w-40" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="review-stat">3</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary d-grid w-10 mt-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#sendInvoiceOffcanvas">
                                    <span class="d-flex align-items-center justify-content-center text-nowrap">
                                        <i class="bx bx-send"></i>Send Mail
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
