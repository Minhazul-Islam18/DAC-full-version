@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    {{-- <script src="{{asset('assets/js/forms-pickers.js')}}"></script> --}}
    <script src="{{ asset('assets/js/commissions-settings.js') }}"></script>
@endsection

@section('content')
    {{-- {{dd($countryData)}} --}}
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/admin">Commissions</a>
                    </li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Users List Table -->
    <div class="card py-4">
        <!-- Begin Content		-->
        <div class="container">
            <h4>Filter:</h4>
            <div class="dropFilterer">
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
                <div class="type-switcher">
                    <label class="switch">
                        Pay to Consult
                        <input type="checkbox" class="switch-input is-valid" />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Pay to Postulate</span>
                    </label>
                </div>
            </div>

            <table class="table table-striped table-hover dt-responsive" id="dataTable">
                <caption class="sr-only">Licensing Bodies</caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Commission for DAC-Rapide</th>
                        <th scope="col">Commission for PO</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Commission for DAC-Rapide</th>
                        <th scope="col">Commission for PO</th>
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
                                            <rect style="fill:#EE2B33;" width="4000" height="1313.935" />
                                            <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178" />
                                            <polygon style="fill:#F9D10D;"
                                                points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 " />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BFA</div>
                                    <div class="full-frm">Burkina Faso</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <a href="#"><i class="fas fa-eye    "></i></a>
                            <a href="#"><i class='bx bx-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <div class="icn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 12">
                                            <path fill="#006a4e" d="M0 0h20v12H0z" />
                                            <circle cx="9" cy="6" r="4" fill="#f42a41" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BAN</div>
                                    <div class="full-frm">Bangladesh</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <a href="#"><i class="fas fa-eye    "></i></a>
                            <a href="#"><i class='bx bx-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                        </td>
                    </tr>
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
                                            <rect style="fill:#EE2B33;" width="4000" height="1313.935" />
                                            <rect y="1252.822" style="fill:#009F51;" width="4000"
                                                height="1245.178" />
                                            <polygon style="fill:#F9D10D;"
                                                points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 " />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BFA</div>
                                    <div class="full-frm">Burkina Faso</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <a href="#"><i class="fas fa-eye    "></i></a>
                            <a href="#"><i class='bx bx-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                        </td>
                    </tr>
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
                                            <rect style="fill:#EE2B33;" width="4000" height="1313.935" />
                                            <rect y="1252.822" style="fill:#009F51;" width="4000"
                                                height="1245.178" />
                                            <polygon style="fill:#F9D10D;"
                                                points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 " />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BFA</div>
                                    <div class="full-frm">Burkina Faso</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <a href="#"><i class="fas fa-eye    "></i></a>
                            <a href="#"><i class='bx bx-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                        </td>
                    </tr>
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
                                            <rect style="fill:#EE2B33;" width="4000" height="1313.935" />
                                            <rect y="1252.822" style="fill:#009F51;" width="4000"
                                                height="1245.178" />
                                            <polygon style="fill:#F9D10D;"
                                                points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 " />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="shrt-frm">BFA</div>
                                    <div class="full-frm">Burkina Faso</div>
                                </div>
                            </div>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <a href="#"><i class="fas fa-eye    "></i></a>
                            <a href="#"><i class='bx bx-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header border-bottom">
                    <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Settings Commission</h6>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                    <form action="" onsubmit="return false">
                        <div class="col-md p-4">
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" onclick="show1();">
                                <label class="form-check-label" for="inlineRadio1">Pay to Postulate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" onclick="show2();">
                                <label class="form-check-label" for="inlineRadio2">Pay to Consult</label>
                            </div>
                        </div>
                    </form>
                    <form class="add-new-user pt-0 consult" id="addConsult" style="display: none">
                        <div class="my-3">
                            <select name="lang" id="lang" class="form-select">
                                <optgroup>
                                    <option value="" selected>Language</option>
                                    <option value="en">English</option>
                                    <option value="ar">Arabic</option>
                                    <option value="fr">French</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                                @foreach ($countryData as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="Commission of DAC-Rapide">Commission of DAC-Rapide [1000-5000]
                                F FCA</label>
                            <input class="form-control" type="number" value="2000" id="html5-number-input">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="Commission of DAC-Rapide">Commission for PO [0.1-0.99]</label>
                            <input class="form-control" type="number" value="0.1" id="html5-number-input">
                            <div class="cents-controller">
                                <span>2000*0.1 = 200</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                        <button type="reset" class="btn btn-label-secondary"
                            data-bs-dismiss="offcanvas">Cancel</button>
                    </form>
                    <form class="add-new-user pt-0 postulate" id="addPostulate" style="display: block">
                        <div class="my-3">
                            <select name="lang" id="lang" class="form-select">
                                <optgroup>
                                    <option value="" selected>Language</option>
                                    <option value="en">English</option>
                                    <option value="ar">Arabic</option>
                                    <option value="fr">French</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                                @foreach ($countryData as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="Commission of DAC-Rapide">Commission of DAC-Rapide
                                [0.1-0.99]</label>
                            <input class="form-control" type="number" value="0.1" id="html5-number-input">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="Commission of DAC-Rapide">Commission for PO [0.1-0.99]</label>
                            <input class="form-control" type="number" value="0.1" id="html5-number-input">
                            <div class="cents-controller">
                                <span>0.1 * 0.1 = 0.01</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                        <button type="reset" class="btn btn-label-secondary"
                            data-bs-dismiss="offcanvas">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
