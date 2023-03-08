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
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/ctd.js') }}"></script>
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
                            <option value="" selected>Select Country</option>
                            @foreach ($countryData as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Type of Earnings</option>
                            <option value="OPP">On Pay to Postulate (OPP)</option>
                            <option value="OPC">On Pay to Consult (OPC)</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="EarningsOnCTD" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Earnings ID</th>
                        <th scope="col">CTD ID</th>
                        <th scope="col">Source of Earnings</th>
                        <th scope="col">Source of Beneficiaries</th>
                        <th scope="col text-truncate">Type of Earnings</th>
                        <th scope="col">Earns of Amount</th>
                        <th scope="col">Current Ballance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Earnings ID</th>
                        <th scope="col">CTD ID</th>
                        <th scope="col">Source of Earnings</th>
                        <th scope="col">Source of Beneficiaries</th>
                        <th scope="col text-truncate">Type of Earnings</th>
                        <th scope="col">Earns of Amount</th>
                        <th scope="col">Current Ballance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('earn-ctd-preview', ['earner'=>'administrator'])}}">125EDRBFA</a> <br>
                            <span>20 Jan, 2023</span>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account')}}"
                                        class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/3.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}"
                                        class="text-body text-truncate"><span class="fw-semibold">
                                            DAC-Rapide
                                        </span></a><small class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td><span>OPC</span></td>
                        <td><span>1000</span></td>
                        <td><span>150 000</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner'=>'administrator'])}}" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice"><i class="bx bx-show mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('earn-ctd-preview', ['earner'=> 'po'])}}">125EPOBFA</a> <br>
                            <span>20 Jan, 2023</span>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/3.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}"
                                        class="text-body text-truncate"><span class="fw-semibold">
                                            DAC-Rapide
                                        </span></a><small class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account')}}"
                                        class="text-body text-truncate"><span class="fw-semibold">Public officer account</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td><span>OPP</span></td>
                        <td><span>1000</span></td>
                        <td><span>150 000</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice"><i class="bx bx-show mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    @include('_partials/_modals/add-invoice')
@endsection
