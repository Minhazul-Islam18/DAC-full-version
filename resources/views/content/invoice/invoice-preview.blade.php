@extends('layouts/layoutMaster')

@section('title', 'Preview - Invoice')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-pricing.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-invoice.css') }}" />
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/pages-pricing.js') }}"></script>
    <script src="{{ asset('assets/js/offcanvas-add-payment.js') }}"></script>
    <script src="{{ asset('assets/js/offcanvas-send-invoice.js') }}"></script>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
@endsection

@section('content')
    @php
        $type = request('type');
    @endphp
    <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
            <div class="card invoice-preview-card">
                <div class="card-body">
                    <div
                        class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                        <div class="mb-xl-0 mb-4">
                            <div class="d-flex svg-illustration mb-3 gap-2">
                                @include('_partials.macros')
                                <span class="app-brand-text h3 mb-0 fw-bold">
                                    {{ config('variables.templateName') }}
                                </span>
                            </div>
                            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                            <p class="mb-1">San Diego County, CA 91905, USA</p>
                            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        @switch($type)
                            @case('Pay to Postulate')
                                <div>
                                    <h4>Invoice #3492BFA</h4>
                                    <div class="mb-2">
                                        <span class="me-1">Date Issues:</span>
                                        <span class="fw-semibold">25/08/2022</span>
                                    </div>
                                    <div>
                                        <span class="me-1">Date Due:</span>
                                        <span class="fw-semibold">29/08/2022</span>
                                    </div>
                                    <div>
                                        <span class="me-1">Date Payment:</span>
                                        <span class="fw-semibold">____________</span>
                                    </div>
                                </div>
                            @break

                            @case('Pay to Consult')
                                <div>
                                    <h4>Invoice #3492BFA</h4>
                                    <div class="mb-2">
                                        <span class="me-1">Date Issues:</span>
                                        <span class="fw-semibold">25/08/2022</span>
                                    </div>
                                </div>
                            @break
                        @endswitch
                    </div>
                </div>
                <div class="type-slicer">
                    <div class="line">
                        @switch($type)
                            @case('Pay to Postulate')
                                <div class="text badge rounded-pill bg-warning">
                                    {{ $type }}
                                </div>
                            @break

                            @case('Pay to Consult')
                                <div class="text badge rounded-pill bg-white text-warning">
                                    {{ $type }}
                                </div>
                            @break

                            @default
                                <div class="text badge rounded-pill bg-success text-white">
                                    {{ 'Invoice' }}
                                </div>
                        @endswitch
                    </div>
                </div>
                <div class="card-body">
                    <div style="border-bottom: 1px solid #36445d" class="row p-sm-3 p-0">
                        <div style="border-right: 1px solid #36445d"
                            class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                            <h6 class="pb-2">Invoice To:</h6>
                            <p class="mb-1">@php
                                $company = request('company');
                            @endphp
                                {{ $company }}</p>
                            <p class="mb-1">Small Heath, B10 0HF, UK</p>
                            <p class="mb-1">718-986-6062</p>
                            <p class="mb-0">peakyFBlinders@gmail.com</p>
                        </div>
                        <div class="col-xl-6 col-md-12 col-sm-7 col-12"
                            style="justify-content: center;align-items: center;display: flex;">
                            <h2 class="text-center">Unpaid</h2>
                        </div>
                    </div>
                </div>
                @switch($type)
                    @case('Pay to Postulate')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="badge bg-label-primary" style="font-size: 1.1rem;text-transform: none;">Call of
                                        tender for the construction of Hospital in Ouagoudou</div>
                                </div>
                            </div>
                        </div>
                    @break

                    @case('Pay to Consult')
                    @break
                @endswitch
                <div class="table-responsive">
                    @switch($type)
                        @case('Pay to Postulate')
                            <table class="table border-top m-0">
                                <thead>
                                    <tr>
                                        <th>Lots</th>
                                        <th>Description</th>
                                        <th>Consortiam of Companies</th>
                                        <th>Prices</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lot-1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Autem laboriosam sint
                                            deserunt veritatis hic ducimus consequuntur vel ad eligendi numquam.</td>
                                        <td>N/A</td>
                                        <td>186 000 F CFA</td>
                                    </tr>
                                    <tr>
                                        <td>Lot-2</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Autem laboriosam sint.</td>
                                        <td>
                                            <ul style="list-style: square;">
                                                <li>Company 1</li>
                                                <li>Company 2</li>
                                                <li>Company 3</li>
                                            </ul>
                                        </td>
                                        <td>186 000 F CFA</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="align-top px-4 py-5">
                                            <p class="mb-2">
                                                <span class="me-1 fw-semibold">Salesperson:</span>
                                                <span>Yabre Mohamed</span>
                                            </p>
                                            <span>Thanks for your business</span>
                                        </td>
                                        <td colspan="2" class="text-end px-4 py-5">
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <p class="">Public Treasure: </p>
                                                </div>
                                                <div class="col-6">
                                                    <span>150 25000 F CFA</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <p class="">DAC-Rapide Commission: </p>
                                                </div>
                                                <div class="col-6">
                                                    <span>50 25000 F CFA</span>
                                                </div>
                                            </div>
                                            <div class="row border-top">
                                                <div class="col-6">
                                                    <p class="">Total: </p>
                                                </div>
                                                <div class="col-6">
                                                    <span>200 50000 F CFA</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="m-0">Payment method: Cash Payment</h5>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @break

                        @case('Pay to Consult')
                            <table class="table border-top m-0">
                                <thead>
                                    <tr>
                                        <th>CTD</th>
                                        <th>Description</th>
                                        <th>Prices</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CTD ID</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Autem laboriosam sint
                                            deserunt veritatis hic ducimus consequuntur vel ad eligendi numquam.</td>
                                        <td>186 000 F CFA</td>
                                    </tr>
                                    <tr>
                                        <td>CTD ID</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Autem laboriosam sint.</td>
                                        <td>186 000 F CFA</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" class="align-top py-5">
                                            <div class="container p-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-2">
                                                            <span class="me-1 fw-semibold">Salesperson:</span>
                                                            <span class="h6">Yabre Mohamed</span>
                                                        </p>
                                                        <span>Thanks for your business</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-2">
                                                            <div class="col-8">
                                                                <p class="">DAC-Rapide Commission: </p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span>14 000 F CFA</span>
                                                            </div>
                                                        </div>
                                                        <div class="row border-top">
                                                            <div class="col-8">
                                                                <p class="">Total: </p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span>14 000 F CFA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="alert alert-warning" role="alert">
                                                        <span>This payment only allows you to consult the tender documents. You
                                                            can't download it or copy & paste it. If you want to apply for this
                                                            tender, You must purchase the tender at the price demanded by
                                                            seller.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @break

                        @case('Pay for Package')
                            <table class="table border-top m-0">
                                <thead>
                                    <tr>
                                        <th>CTD</th>
                                        <th>Package name</th>
                                        <th>Package duration</th>
                                        <th>Package status</th>
                                        <th>Prices</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CTD ID</td>
                                        <td>Starter</td>
                                        <td>Yearly</td>
                                        <td><span class="badge bg-label-warning m-0">Unpaid</span></td>
                                        <td>186 000 F CFA</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="container p-0">
                                                <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pb-3">
                                                    <label class="switch switch-primary me-0">
                                                        <span class="switch-label">Monthly</span>
                                                        <input type="checkbox" class="switch-input price-duration-toggler"
                                                            checked />
                                                        <span class="switch-toggle-slider">
                                                            <span class="switch-on"></span>
                                                            <span class="switch-off"></span>
                                                        </span>
                                                        <span class="switch-label">Annual</span>
                                                    </label>
                                                </div>
                                                <div class="row m-0 gy-1 pack-container">
                                                    <div id="Starter" class="col-xl mb-lg-0 lg-4 pack">
                                                        <div class="card border shadow-none">
                                                            <div class="card-body">
                                                                <h5 class="text-start text-uppercase">Starter</h5>

                                                                <div class="text-center position-relative mb-4 pb-1">
                                                                    <div class="mb-2 d-flex">
                                                                        <h1 class="price-toggle text-primary price-yearly mb-0">$49
                                                                        </h1>
                                                                        <h1
                                                                            class="price-toggle text-primary price-monthly mb-0 d-none">
                                                                            $99</h1>
                                                                        <sub
                                                                            class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
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

                                                                <a href="{{ url('auth/register-basic') }}"
                                                                    class="btn btn-label-primary d-grid w-100">Pay Cash</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" class="align-top py-5">
                                            <div class="container p-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="mb-2">
                                                            <span class="me-1 fw-semibold">Salesperson:</span>
                                                            <span class="h6">Yabre Mohamed</span>
                                                        </p>
                                                        <span>Thanks for your business</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-2">
                                                            <div class="col-8">
                                                                <p class="">DAC-Rapide Commission: </p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span>14 000 F CFA</span>
                                                            </div>
                                                        </div>
                                                        <div class="row border-top">
                                                            <div class="col-8">
                                                                <p class="">Total: </p>
                                                            </div>
                                                            <div class="col-4">
                                                                <span>14 000 F CFA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="alert alert-warning" role="alert">
                                                        <span>This payment only allows you to consult the tender documents. You
                                                            can't download it or copy & paste it. If you want to apply for this
                                                            tender, You must purchase the tender at the price demanded by
                                                            seller.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @break
                    @endswitch
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <span class="text-center d-block">It was a pleasure working with you and your team. We hope you
                                will keep us in mind for future Call of tenders. Thank You!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Invoice -->

        <!-- Invoice Actions -->
        <div class="col-xl-3 col-md-4 col-12 invoice-actions">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="bx bx-paper-plane bx-xs me-3"></i>Send Invoice</span>
                    </button>
                    <button class="btn btn-label-secondary d-grid w-100 mb-3">
                        Download
                    </button>
                    <a class="btn btn-label-secondary d-grid w-100 mb-3" target="_blank"
                        href="{{ url('app/invoice/print') }}">
                        Print
                    </a>
                    <a href="{{ url('app/invoice/edit') }}" class="btn btn-label-secondary d-grid w-100 mb-3">
                        Edit Invoice
                    </a>
                    <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasPayCash">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">Pay Cash</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasPayCash" aria-labelledby="offcanvasPayCashLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Cash Payment</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            @switch($type)
                @case('Pay to Postulate')
                    <form id="" class="add-new-pack pt-0">
                        {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
                        <div class="my-3">
                            <button class="btn btn-primary">250 000 F CFA</button>
                        </div>
                        <div class="my-3">
                            <span class="d-block">From</span>
                            <div class="card alert alert-success">
                                <div class="card-body py-1 px-1">
                                    <div class="icon-box d-flex">
                                        <span class="badge badge-center rounded-pill bg-info w-px-40 h-px-40 me-2"><i
                                                class="bx bx-user bx-xs"></i></span>
                                        <div>
                                            <div class="user-name">Yabre Mohammad</div>
                                            <small class="text-muted">ypottiec@privacy.gov.au</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <span>To</span>
                            <div class="card alert alert-warning">
                                <div class="card-body py-1 px-1">
                                    <div class="icon-box d-flex">
                                        <span class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40 me-2"><i
                                                class="bx bx-user bx-xs"></i></span>
                                        <div>
                                            <div class="user-name">Minhazul islam</div>
                                            <small class="text-muted">ypottiec@privacy.gov.au</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <span>Subject</span>
                            <div class="alert alert-dark" role="alert">
                                International call for tenders for construction a hospital in Fada-N'gourma.
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="alert alert-warning" role="alert">
                                <h6 class="alert-heading mb-1">Warning!</h6>
                                <span>By using Cash payment on behalf of the customers, You are deemed to have collected the
                                    money.</span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Pay</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                @break

                @case('Pay to Consult')
                    <form id="" class="add-new-pack pt-0">
                        {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
                        <div class="my-3">
                            <button class="btn btn-primary">250 000 F CFA</button>
                        </div>
                        <div class="my-3">
                            <span class="d-block">From</span>
                            <div class="card alert alert-success">
                                <div class="card-body py-1 px-1">
                                    <div class="icon-box d-flex">
                                        <span class="badge badge-center rounded-pill bg-info w-px-40 h-px-40 me-2"><i
                                                class="bx bx-user bx-xs"></i></span>
                                        <div>
                                            <div class="user-name">Yabre Mohammad</div>
                                            <small class="text-muted">ypottiec@privacy.gov.au</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <span>To</span>
                            <div class="card alert alert-warning">
                                <div class="card-body py-1 px-1">
                                    <div class="icon-box d-flex">
                                        <span class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40 me-2"><i
                                                class="bx bx-user bx-xs"></i></span>
                                        <div>
                                            <div class="user-name">COGEA International</div>
                                            <small class="text-muted">ypottiec@privacy.gov.au</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <span>Item(s)</span>
                            <div class="alert alert-dark" role="alert">
                                <h6 class="alert-heading mb-1">CTD ID [1]</h6>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat alias, vitae nostrum
                                    reprehenderit ipsam voluptatem corporis optio sint porro, minus laudantium!</span>
                                <hr>
                                <h6 class="alert-heading mb-1">CTD ID [2]</h6>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat alias, vitae nostrum
                                    reprehenderit ipsam voluptatem corporis optio sint porro, minus laudantium!</span>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="alert alert-warning" role="alert">
                                <h6 class="alert-heading mb-1">Warning!</h6>
                                <span>By using Cash payment on behalf of the customers, You are deemed to have collected the
                                    money.</span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Pay</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                @break

                {{-- @default
        Default case... --}}
            @endswitch

        </div>
    </div>
    @include('_partials/_offcanvas/offcanvas-send-invoice')
    @include('_partials/_offcanvas/offcanvas-add-payment')
    <!-- /Offcanvas -->
@endsection
