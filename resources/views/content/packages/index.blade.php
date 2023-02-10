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
    <script src="{{ asset('assets/js/packages.js') }}"></script>
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
                    <li class="breadcrumb-item active">All Packages</li>
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
                        <select id="" name="titleFilter" class="titleFilter form-select">
                            <option value="" selected>Category</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <optgroup>
                                <option value="" selected>Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </optgroup>
                        </select>
                    </div>
                    <label class="switch">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label ps-0">Monthly</span>
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Yearly</span>
                    </label>
                </div>
            </div>


            <table class="table table-striped table-hover dt-responsive" id="dataTable">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Price(F CFA)</th>
                        <th scope="col">Badge</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Price(F CFA)</th>
                        <th scope="col">Badge</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="title">Basic</div>
                                    <div class="subtitle">Business</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>Exclusive</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td>7</td>
                        <td>
                            <a href="#"> <i class='bx bx-edit'></i> </a>
                            <a href="#"> <i class="fas fa-eye    "></i> </a>
                            <a href="#"> <i class='bx bxs-trash'></i> </a>
                            <a href="#"> <i class='bx bx-dots-vertical-rounded'></i> </a>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="title">Premium</div>
                                    <div class="subtitle">Enterprise</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>Popular</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>3</td>
                        <td>
                            <a href="#"> <i class='bx bx-edit'></i> </a>
                            <a href="#"> <i class="fas fa-eye    "></i> </a>
                            <a href="#"> <i class='bx bxs-trash'></i> </a>
                            <a href="#"> <i class='bx bx-dots-vertical-rounded'></i> </a>
                        </td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddPackages"
        aria-labelledby="offcanvasAddPackagesLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add Packages</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <label for="filepond"></label>
                    <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                        data-max-files="3" />
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                        allowed.</span>
                </div>
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
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business" selected>Business</option>
                        <option value="Enterprise">Enterprise</option>
                    </select>
                    <label for="floatingSelect">Category</label>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Title">
                    <label for="floatingTitle">Title</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingSubtitle" placeholder="Enter Sub title">
                    <label for="floatingSubtitle">Sub-title</label>
                </div>
                <div class="col-md-12 my-3">
                    <h6 class="text-muted">Duration</h6>
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                    aria-selected="true">Monthly</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                    aria-selected="false">Yearly</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingSubtitle"
                                        placeholder="Enter price">
                                    <label for="floatingSubtitle">Price</label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingSubtitle"
                                        placeholder="Enter price">
                                    <label for="floatingSubtitle">Price</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <label for="editor">Description *</label>
                    <textarea name="content" id="editor">This is some sample content.</textarea>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="floatingBadge" placeholder="Enter Badge">
                    <label for="floatingBadge">Add Badge *</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business">Published</option>
                        <option value="Enterprise">Unpublished</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>
                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="" required="">
                    <label for="floatingInput">Serial Number</label>
                    <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the feature
                        will be
                        shown.</span>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="TagifyCustomInlineSuggestion" class="form-label">Meta Tags *</label>
                    <input id="TagifyCustomInlineSuggestion" name="TagifyCustomInlineSuggestion" class="form-control"
                        placeholder="select technologies" value="css, html, javascript">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="bootstrap-maxlength-example2">Meta Description *</label>
                    <textarea id="bootstrap-maxlength-example2" class="form-control bootstrap-maxlength-example" rows="3"
                        maxlength="255"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>
@endsection
