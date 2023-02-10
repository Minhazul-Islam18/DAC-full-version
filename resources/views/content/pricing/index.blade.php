@extends('layouts/layoutMaster')

@section('title', 'Content Management- Blog')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-pricing.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" /> --}}
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" /> --}}
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
--}}
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" /> --}}
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" /> --}}
    {{--
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" /> --}}
@endsection

@section('vendor-script')
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
    {{-- <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script> --}}
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    {{-- <script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script> --}}
    {{-- <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script> --}}
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/pages-pricing.js') }}"></script>
    <script src="{{ asset('assets/js/pricings.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
@endsection

@section('content')
    <div class="container p-0">
        <div class="row pb-3">
            <div class="col-9 pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="/admin">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Content Management</a>
                        </li>
                        <li class="breadcrumb-item active"> Plan & Pricings </li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="lang-filter">
                    <select name="lang" id="lang" class="form-select">
                        <optgroup>
                            <option value="" selected="">Language</option>
                            <option value="en">English</option>
                            <option value="ar">Arabic</option>
                            <option value="fr">French</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h5 class="card-header">Title & Subtitle</h5>
        <div class="card-body">
            <div class="">
                <form class="p-3 p-md-5">
                    <div class="d-flex justify-content-center gap-3">
                        <div class="form-floating mb-3 w-100">
                            <input type="text" id="floatingInput" class="form-control" placeholder="Enter title">
                            <label for="floatingInput">Title</label>
                        </div>
                        <div class="form-floating mb-3 w-100">
                            <input type="text" id="floatingInput" class="form-control" placeholder="Enter subtitle">
                            <label for="floatingInput">Subtitle</label>
                        </div>
                        <div class="form-floating mb-3 w-100">
                            <input type="number" id="floatingInput" class="form-control" placeholder="Enter number">
                            <label for="floatingInput">Displaying number of packages</label>
                            <span class="d-flex" style="color: #d95a00;font-weight: 600;">* The number you select will
                                determine the number of packages to display on the homepage.</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5">
                <label class="switch switch-primary ms-sm-5 ps-sm-5 me-0">
                    <span class="switch-label">Monthly</span>
                    <input type="checkbox" class="switch-input price-duration-toggler" checked />
                    <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                    </span>
                    <span class="switch-label">Annual</span>
                </label>
                <div class="mt-n5 ms-n5 ml-2 mb-2 d-none d-sm-block">
                    <i class="bx bx-subdirectory-right bx-sm rotate-90 text-muted scaleX-n1-rtl"></i>
                    <span class="badge badge-sm bg-label-primary rounded-pill">Get 2 months free</span>
                </div>
            </div>
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <h5 class="text-start text-uppercase">Starter</h5>

                                <div class="text-center position-relative mb-4 pb-1">
                                    <div class="mb-2 d-flex">
                                        <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                                        <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                                        <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                    </div>
                                    <small
                                        class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                        588 / year</small>
                                </div>

                                <p>All the basics for business that are just getting started</p>

                                <hr>

                                <ul class="list-unstyled pt-2 pb-1">
                                    <li class="mb-2">
                                        <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        Up to 10 users
                                    </li>
                                    <li class="mb-2">
                                        <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        150+ components
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        Basic support on Github
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Monthly updates
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Integrations
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Full Support
                                    </li>
                                </ul>

                                <a href="{{ url('auth/register-basic') }}" class="btn btn-label-primary d-grid w-100">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="card border border-2 border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap mb-3">
                                <h5 class="text-start text-uppercase mb-0">Pro / 15% OFF</h5>
                                <span class="badge bg-primary rounded-pill">Popular</span>
                            </div>

                            <div class="text-center position-relative mb-4 pb-1">
                                <div class="mb-2 d-flex">
                                    <h1 class="price-toggle text-primary price-yearly mb-0">$99</h1>
                                    <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$199</h1>
                                    <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                </div>
                                <small
                                    class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                    1,188 / year</small>
                            </div>
                            <p>Batter for growing business that want to more customers</p>

                            <hr>

                            <ul class="list-unstyled pt-2 pb-1">
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Up to 10 users
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    150+ components
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Basic support on Github
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Monthly updates
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Integrations
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Full Support
                                </li>
                            </ul>

                            <a href="{{ url('auth/register-basic') }}" class="btn btn-primary d-grid w-100">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="card border shadow-none">
                        <div class="card-body">
                            <h5 class="text-start text-uppercase">ENTERPRISE</h5>

                            <div class="text-center position-relative mb-4 pb-1">
                                <div class="mb-2 d-flex">
                                    <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                                    <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                                    <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                </div>
                                <small
                                    class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                    1,788 / year</small>
                            </div>
                            <p>Advance features for enterprise who need more customization</p>

                            <hr>

                            <ul class="list-unstyled pt-2 pb-1">
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Up to 10 users
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    150+ components
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Basic support on Github
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Monthly updates
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Integrations
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Full Support
                                </li>
                            </ul>

                            <a href="{{ url('auth/register-basic') }}" class="btn btn-label-primary d-grid w-100">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <h5 class="text-start text-uppercase">Starter</h5>

                                <div class="text-center position-relative mb-4 pb-1">
                                    <div class="mb-2 d-flex">
                                        <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                                        <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                                        <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                    </div>
                                    <small
                                        class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                        588 / year</small>
                                </div>

                                <p>All the basics for business that are just getting started</p>

                                <hr>

                                <ul class="list-unstyled pt-2 pb-1">
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        Up to 10 users
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        150+ components
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                        </span>
                                        Basic support on Github
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Monthly updates
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Integrations
                                    </li>
                                    <li class="mb-2">
                                        <span
                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
                                        </span>
                                        Full Support
                                    </li>
                                </ul>

                                <a href="{{ url('auth/register-basic') }}" class="btn btn-label-primary d-grid w-100">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="card border border-2 border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap mb-3">
                                <h5 class="text-start text-uppercase mb-0">Pro / 15% OFF</h5>
                                <span class="badge bg-primary rounded-pill">Popular</span>
                            </div>

                            <div class="text-center position-relative mb-4 pb-1">
                                <div class="mb-2 d-flex">
                                    <h1 class="price-toggle text-primary price-yearly mb-0">$99</h1>
                                    <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$199</h1>
                                    <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                </div>
                                <small
                                    class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                    1,188 / year</small>
                            </div>
                            <p>Batter for growing business that want to more customers</p>

                            <hr>

                            <ul class="list-unstyled pt-2 pb-1">
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Up to 10 users
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    150+ components
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Basic support on Github
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Monthly updates
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Integrations
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Full Support
                                </li>
                            </ul>

                            <a href="{{ url('auth/register-basic') }}" class="btn btn-primary d-grid w-100">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="card border shadow-none">
                        <div class="card-body">
                            <h5 class="text-start text-uppercase">ENTERPRISE</h5>

                            <div class="text-center position-relative mb-4 pb-1">
                                <div class="mb-2 d-flex">
                                    <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                                    <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                                    <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                </div>
                                <small
                                    class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                    1,788 / year</small>
                            </div>
                            <p>Advance features for enterprise who need more customization</p>

                            <hr>

                            <ul class="list-unstyled pt-2 pb-1">
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Up to 10 users
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    150+ components
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Basic support on Github
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Monthly updates
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Integrations
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                        <i class="bx bx-check bx-xs"></i>
                                    </span>
                                    Full Support
                                </li>
                            </ul>

                            <a href="{{ url('auth/register-basic') }}" class="btn btn-label-primary d-grid w-100">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
