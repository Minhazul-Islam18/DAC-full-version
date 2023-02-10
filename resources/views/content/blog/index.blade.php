@extends('layouts/layoutMaster')

@section('title', 'Content Management- Blog')

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
    <script src="{{ asset('assets/js/blog.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script src="{{ asset('assets/js/forms-tagify.js') }}"></script>
    <script src="{{ asset('assets/js/forms-extras.js') }}"></script>
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
                        <li class="breadcrumb-item active">Blog</li>
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
                    <div class="d-flex justify-content-center">
                        <div class="mb-3 me-3 form-floating w-50">
                            <input type="text" id="floatingInput" class="form-control" placeholder="Enter title">
                            <label for="floatingInput">Title</label>
                        </div>
                        <div class="mb-3 form-floating w-50">
                            <input type="text" id="floatingInput" class="form-control" placeholder="Enter subtitle">
                            <label for="floatingInput">Subtitle</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  Table -->
    <div class="card py-3">
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter invoice-title">
                    <div class="title-filter">
                        <select name="categoryFilter" id="categoryFilter" class="form-select categoryFilter">
                            <option value="" selected>Category</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
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

            <table id="dataTable" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Publish date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Publish date</th>
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
                            <img class="w-100 rounded-circle" src="https://via.placeholder.com/50" alt="">
                        </td>
                        <td>
                            <span class="m-0">26-11-2022</span>
                        </td>
                        <td>
                            <span class="badge bg-label-success m-0">Active</span>
                        </td>
                        <td>3</td>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addBlog" aria-labelledby="addBlogLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="addBlogLabel" class="offcanvas-title">Add Blog</h6>
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
                <div class="my-3">
                    <label for="editor">Description *</label>
                    <textarea name="content" id="editor">This is some sample content.</textarea>
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
