@extends('layouts/layoutMaster')

@section('title', 'Content Management-Gallery')

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        type="text/css" media="screen" />
@endsection

@section('vendor-script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
    </script>
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
    <script src="{{ asset('assets/js/gallery.js') }}"></script>
@endsection

@section('content')
    <div class="container p-0">
        <div class="row pb-3">
            <div class="col-12 pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="/admin">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Content Management</a>
                        </li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter invoice-title">
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
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="status">
                        <select name="categoryFilter" id="categoryFilter" class="form-select categoryFilter">
                            <option value="" selected>Category</option>
                            <option value="Photos">Photos</option>
                            <option value="Video">Video</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="dataTable" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Images</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Images</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="text-truncate mb-1" style="max-width: 150px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit.</h6>
                            <small class="text-truncate text-muted">Category</small>
                        </td>
                        <td>
                            <div data-test="gallery" class="gallery d-flex align-items-center avatar-group my-3">
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/5.png') }}">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/12.png') }}">
                                        <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/6.png') }}">
                                        <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded-circle pull-up bg-secondary"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-original-title="3 more">+3</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-label-success m-0">Active</span>
                        </td>
                        <td>930777</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <i class="bx bx-edit mx-1"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Move to Trash"
                                    data-bs-original-title="Move to Trash">
                                    <i class="bx bx-trash mx-1"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;" class="dropdown-item">Download</a><a href="invoice/edit"
                                            class="dropdown-item">Edit</a><a href="javascript:;"
                                            class="dropdown-item">Duplicate</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-truncate mb-1" style="max-width: 150px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit.</h6>
                            <small class="text-truncate text-muted">Category</small>
                        </td>
                        <td>
                            <div data-test="gallery" class="gallery d-flex align-items-center avatar-group my-3">
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/5.png') }}">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/12.png') }}">
                                        <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="{{ asset('assets/img/avatars/6.png') }}">
                                        <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar"
                                            class="rounded-circle pull-up">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded-circle pull-up bg-secondary"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-original-title="3 more">+3</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-label-danger m-0">Inactive</span>
                        </td>
                        <td>930778</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                    <i class="bx bx-edit mx-1"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Move to Trash"
                                    data-bs-original-title="Move to Trash">
                                    <i class="bx bx-trash mx-1"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;" class="dropdown-item">Download</a><a href="invoice/edit"
                                            class="dropdown-item">Edit</a><a href="javascript:;"
                                            class="dropdown-item">Duplicate</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addGallery" aria-labelledby="addGalleryLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="addGalleryLabel" class="offcanvas-title">Add Gallery</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <div class="py-3">
                <input type="file" class="filepond" name="filepond" multiple data-max-file-size="30MB"
                    data-max-files="50" />
                <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                    allowed.</span>
            </div>
            <div class="my-3">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="en" selected="">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </select>
                    <label for="floatingSelect">Language</label>
                </div>
            </div>
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option value="Business" selected="">Business</option>
                    <option value="Enterprise">Enterprise</option>
                </select>
                <label for="floatingSelect">Category</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Title">
                <label for="floatingTitle">Title</label>
            </div>
            <div class="my-3">
                <label for="exampleFormControlTextarea1" class="form-label">Summary</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" spellcheck="false"
                    placeholder="enter gallery summary"></textarea>
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
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
    </div>
@endsection
