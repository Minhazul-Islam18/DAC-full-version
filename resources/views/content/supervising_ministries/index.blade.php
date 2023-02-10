@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
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
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
@endsection

@section('page-script')
    {{-- <script src="{{asset('assets/js/forms-pickers.js')}}"></script> --}}
    <script src="{{ asset('assets/js/supervising-ministries.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script src="{{ asset('assets/js/forms-tagify.js') }}"></script>
    <script src="{{ asset('assets/js/forms-extras.js') }}"></script>
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Supervising Ministry</li>
                </ol>
            </nav>
        </div>
        <div class="col-3">
            <div class="lang-filter">
                <select name="lang" id="lang" class="form-select">
                    <optgroup>
                        <option value="" selected>Language</option>
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </optgroup>
                </select>
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
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>


            <table class="table table-striped table-hover dt-responsive" id="dataTable">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Supervising Ministries</th>
                        <th scope="col">CTD's Approved</th>
                        <th scope="col">CTD's Sold</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Supervising Ministries</th>
                        <th scope="col">CTD's Approved</th>
                        <th scope="col">CTD's Sold</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <div class="icn">
                                        <svg version="1.1" id="Burkina_Faso" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            height="auto" viewBox="0 0 4000 2498"
                                            style="enable-background:new 0 0 4000 2498;" xml:space="preserve"
                                            width="44px">
                                            <rect style="fill:#EE2B33;" width="4000" height="1313.935"></rect>
                                            <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178">
                                            </rect>
                                            <polygon style="fill:#F9D10D;"
                                                points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 ">
                                            </polygon>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BFA</div>
                                    <div class="full-frm">Burkina Faso</div>
                                </div>
                            </div>
                        </td>
                        <td>xxxxxxxx</td>
                        <td>780000</td>
                        <td>960900</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td>
                            <a href="#" class="text-white"> <i class='bx bx-edit'></i> </a>
                            <a href="#" class="text-white"> <i class='bx bxs-trash'></i> </a>
                            <a href="#" class="text-white"> <i class="fas fa-eye    "></i> </a>
                            <a href="#" class="text-white"> <i class='bx bx-dots-vertical-rounded'></i> </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <div class="icn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 12">
                                            <path fill="#006a4e" d="M0 0h20v12H0z"></path>
                                            <circle cx="9" cy="6" r="4" fill="#f42a41">
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BAN</div>
                                    <div class="full-frm">Bangladesh</div>
                                </div>
                            </div>
                        </td>
                        <td>xxxxxxxx</td>
                        <td>780000</td>
                        <td>960900</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="#" class="text-white"> <i class='bx bx-edit'></i> </a>
                            <a href="#" class="text-white"> <i class='bx bxs-trash'></i> </a>
                            <a href="#" class="text-white"> <i class="fas fa-eye    "></i> </a>
                            <a href="#" class="text-white"> <i class='bx bx-dots-vertical-rounded'></i> </a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddMinistry"
        aria-labelledby="offcanvasAddMinistryLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add Supervising Ministry</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>English</option>
                            <option value="ar">Arabic</option>
                            <option value="fr">French</option>
                        </select>
                        <label for="floatingSelect">Language</label>
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
                <div class="panel panel-default">

                    <div class="panel-body">

                        <div id="education_fields"></div>
                        <div class="my-3">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-9 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Schoolname"
                                                name="Schoolname[]" value="" placeholder="Enter Ministry">
                                        </div>
                                    </div>
                                    <div class="col-3 nopadding">
                                        <div class="input-group-btn d-flex justify-content-end">
                                            <button class="btn btn-success" type="button" onclick="education_fields();">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business">Published</option>
                        <option value="Enterprise">Unpublished</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>

            </form>
        </div>
    </div>
@endsection
