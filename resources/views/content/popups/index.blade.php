@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection

@section('vendor-script')
    {{-- <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script> --}}
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
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/admin_management.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>
    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter invoice-title">
                    <div class="title-filter">
                        <select id="" name="countryFilter" class="countryFilter form-select">
                            <option value="" selected>Select Language</option>
                            <option value="">Lang 1</option>
                        </select>
                    </div>
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Select Type</option>
                            <option value="OPP">Type 1</option>
                            <option value="OPC">Type 2</option>
                            <option value="OPC">Type 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="popupsList" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Popup Image</th>
                        <th scope="col">Popup Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Popup Image</th>
                        <th scope="col">Popup Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded w-50">
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded w-50">
                            </div><span class="badge bg-label-info mt-1">Type 1</span>
                        </td>
                        <td><span class="bg-success py-1 px-2 rounded text-white">Active</span></td>
                        <td>4</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#popupTypeEdit"
                                    class="text-body"><i class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar" class="rounded w-50">
                            </div>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar" class="rounded w-50">
                            </div><span class="badge bg-label-info mt-1">Type 3</span>
                        </td>
                        <td><span class="bg-danger py-1 px-2 rounded text-white">Inactive</span></td>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#popupTypeEdit"
                                    class="text-body"><i class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Delete" data-bs-original-title="Delete"><i class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-success delete-record">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Choose a Popup Type.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg1">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/3.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType1" aria-controls="popupType1"
                                    name="customRadioImage1" class="form-check-input" type="radio"
                                    value="customRadioImg1" id="customRadioImg1" checked />
                            </div>
                            <span class="d-block text-center fw-bold">Type 1</span>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg2">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/8.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType2" aria-controls="popupType2"
                                    name="customRadioImage2" class="form-check-input" type="radio"
                                    value="customRadioImg2" id="customRadioImg2" />
                            </div>
                            <span class="d-block text-center fw-bold">Type 2</span>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg3">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/5.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType3" aria-controls="popupType1"
                                    name="customRadioImage3" class="form-check-input" type="radio"
                                    value="customRadioImg3" id="customRadioImg3" />
                            </div>
                            <span class="d-block text-center fw-bold">Type 3</span>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg4">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/4.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType4" aria-controls="popupType4"
                                    name="customRadioImage4" class="form-check-input" type="radio"
                                    value="customRadioImg4" id="customRadioImg4" checked />
                            </div>
                            <span class="d-block text-center fw-bold">Type 4</span>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg5">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/1.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType5" aria-controls="popupType5"
                                    name="customRadioImage5" class="form-check-input" type="radio"
                                    value="customRadioImg5" id="customRadioImg5" />
                            </div>
                            <span class="d-block text-center fw-bold">Type 5</span>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg6">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/6.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType6" aria-controls="popupType6"
                                    name="customRadioImage6" class="form-check-input" type="radio"
                                    value="customRadioImg6" id="customRadioImg6" />
                            </div>
                            <span class="d-block text-center fw-bold">Type 6</span>
                        </div>
                        <div class="col-md">
                            <div class="form-check custom-option custom-option-image custom-option-image-radio">
                                <label class="form-check-label custom-option-content" for="customRadioImg7">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('assets/img/backgrounds/2.jpg') }}" alt="radioImg" />
                                    </span>
                                </label>
                                <input data-bs-toggle="offcanvas" data-bs-target="#popupType7" aria-controls="popupType7"
                                    name="customRadioImage7" class="form-check-input" type="radio"
                                    value="customRadioImg7" id="customRadioImg7" />
                            </div>
                            <span class="d-block text-center fw-bold">Type 7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType1"
        aria-labelledby="popupType1Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType1Label" class="offcanvas-title">Add Popup (Type 1)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType2"
        aria-labelledby="popupType2Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType2Label" class="offcanvas-title">Add Popup (Type 2)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Background color</p>
                        <div class="color-picker-nano"></div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button URL">
                    <label for="formId1">Button URL</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType3"
        aria-labelledby="popupType3Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType3Label" class="offcanvas-title">Add Popup (Type 3)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Background color</p>
                        <div class="color-picker-nano"></div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType4"
        aria-labelledby="popupType4Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType4Label" class="offcanvas-title">Add Popup (Type 4)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button URL">
                    <label for="formId1">Button URL</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType5"
        aria-labelledby="popupType5Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType5Label" class="offcanvas-title">Add Popup (Type 5)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType6"
        aria-labelledby="popupType6Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType6Label" class="offcanvas-title">Add Popup (Type 6)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button URL">
                    <label for="formId1">Button URL</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="flatpickr-datetime" class="form-label">End date & time</label>
                    <input type="text" class="form-control flatpickr-datetime" placeholder="YYYY-MM-DD HH:MM"
                        id="" />
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupType7"
        aria-labelledby="popupType7Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType7Label" class="offcanvas-title">Add Popup (Type 7)</h6>
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

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup name">
                    <label for="floatingInput">Popup name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Popup title">
                    <label for="floatingInput">Popup title</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Enter text</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Background color</p>
                        <div class="color-picker-nano"></div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Button text</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button URL">
                    <label for="formId1">Button URL</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Button color</p>
                        <div class="color-picker-button"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="flatpickr-datetime" class="form-label">End date & time</label>
                    <input type="text" class="form-control flatpickr-datetime" placeholder="YYYY-MM-DD HH:MM"
                        id="" />
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Delay time">
                    <label for="floatingInput">Delay time</label>
                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">This will decide the delay time to shaow
                        the popup.</span>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">If there multiple popups are active, Then the higher
                            value of popup will be displayed in the site!</li>
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
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
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="popupTypeEdit"
        aria-labelledby="popupTypeEditLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupTypeEditLabel" class="offcanvas-title">Edit Popup (Type eill be here)</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <h6>Popup settings will here!</h6> 
                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>

            </form>
        </div>
    </div>
    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>

@endsection
