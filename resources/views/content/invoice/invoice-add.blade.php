@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-pricing.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-invoice.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-pricing.js')}}"></script>
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
{{-- <script src="{{asset('assets/js/forms-tagify.js')}}"></script> --}}
<script src="{{asset('assets/js/offcanvas-send-invoice.js')}}"></script>
<script src="{{asset('assets/js/invoice-add.js')}}"></script>
@endsection

@section('content')
@php
$type =  request('type');
@endphp 
<div class="row invoice-add">
  <!-- Invoice Add-->
  <div class="col-lg-9 col-12 mb-lg-0 mb-4">
    <div class="card invoice-preview-card">
      <div class="card-body">
        <div class="row p-sm-3 p-0">
          <div class="col-md-6 mb-md-0 mb-4">
            <div class="d-flex svg-illustration mb-4 gap-2">
              @include('_partials.macros')
              <span class="app-brand-text h3 mb-0 fw-bold">
                 {{ config('variables.templateName') }}
              </span>
            </div>
            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
            <p class="mb-1">San Diego County, CA 91905, USA</p>
            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
          </div>
          <div class="col-md-6">
            @switch($type)
            @case("Pay to Postulate")
              <dl class="row mb-2">
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end d-flex justify-content-end align-items-center">
                  <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control" disabled placeholder="3905" value="3905" id="invoiceId" />
                  </div>
                </dd>
                <div class="col-md-6">
                  <div class="mb-2 text-end">
                    <span class="me-1">Date:</span>
                  </div>
                  <div class="text-end">
                    <span class="me-1">Date Due:</span>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="mb-2">
                    <span class="fw-semibold">25/08/2022</span>
                  </div>
                  <div>
                    <span class="fw-semibold">29/08/2022</span>
                  </div>                
                </div>

              </dl>
            @break
            @case("Pay to Consult")
              <dl class="row mb-2">
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end d-flex justify-content-end align-items-center">
                  <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-start">
                  <div class="w-px-150">
                    <input type="text" class="form-control" disabled placeholder="3905" value="3905" id="invoiceId" />
                  </div>
                </dd>
                <div class="col-md-6">
                  <div class="mb-2 text-end">
                    <span class="me-1">Date:</span>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="mb-2">
                    <span class="fw-semibold">25/08/2022</span>
                  </div>               
                </div>

              </dl> 
            @break
            @case("Pay for Package")
              <dl class="row mb-2">
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end d-flex justify-content-end align-items-center">
                  <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-start">
                  <div class="w-px-150">
                    <input type="text" class="form-control" disabled placeholder="3905" value="3905" id="invoiceId" />
                  </div>
                </dd>
                <div class="col-md-6">
                  <div class="mb-2 text-end">
                    <span class="me-1">Date:</span>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="mb-2">
                    <span class="fw-semibold">25/08/2022</span>
                  </div>               
                </div>

              </dl> 
            @break
            @endswitch
          </div>
        </div>
        <div class="type-slicer">
          <div class="line">
            @switch($type)
            @case("Pay to Postulate")
            <div class="text badge rounded-pill bg-warning">
              {{ $type }}
            </div>
            @break
            @case("Pay to Consult")
            <div class="text badge rounded-pill bg-white text-warning">
              {{ $type }}
            </div>
            @break
            @case("Pay for Package")
            <div class="text badge rounded-pill bg-white text-warning">
              {{ $type }}
            </div>
            @break
            @default
              <div class="text badge rounded-pill bg-success text-white">
                {{ "Invoice" }}
              </div>
            @endswitch
          </div>
        </div>
        <div class="row p-sm-3 p-0">
          <div class="col-md-12 col-sm-12 col-12 mb-sm-0 mb-4">
            <h6 class="pb-2">Invoice To:</h6>
            <div class="w-auto mb-3 d-flex justify-content-between">
              <select id="ddlViewBy" class="select2-icons select-company form-select form-select-lg" data-allow-clear="true">
                <option value="Company 1">Company 1</option>
                <option value="Company 2">Company 2</option>
              </select>
              <div class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddCompany">
                <i class="bx bx-plus-circle"></i>Add Company
              </div>              
            </div>

            <p class="mb-1">Shelby Company Limited</p>
            <p class="mb-1">Small Heath, B10 0HF, UK</p>
            <p class="mb-1">718-986-6062</p>
            <p class="mb-0">peakyFBlinders@gmail.com</p>
          </div>
        </div>

        <hr class="mx-n4" />
        @switch($type)
        @case("Pay for Package")

        @break       
        @default
          <select id="" name="countryFilter" class="countryFilter form-select">
            <option value="" selected>Select Country</option>
            @foreach ($countryData as $item)
              <option value="{{$item}}">{{$item}}</option>
            @endforeach
          </select>
        @endswitch

        @switch($type)
        @case("Pay for Package")
          <div class="card mt-3 border border-0">
          <div class="card-body p-0">
        @break       
        @default
          <div class="card mt-3">
          <div class="card-body">
        @endswitch
            {{-- <div class="col-md-12" id="addmore">
              <div class="row" id="row0">
                <div class="form-group itemform">
                  <label for=""></label>
                  <span id="add" class="btn btn-info">add</span>
                </div>
              </div>
            </div> --}}
            {{-- $("#add").click(function(){
              i++;
              $("#addmore").append(`<div class="row mt-3" id="row'+i+'"><div class="col-md-2 col-2 d-flex justify-content-center align-items-center"><div class="form-group itemform"><label for=""></label><span class="btn btn-danger btn_remove"  id="'+i+'" >Remove</span></div></div></div>`)
          
            });
            $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
              $("#row"+button_id+"").remove();
              
            }); --}}
            @switch($type)
            @case("Pay to Postulate")
              <form class="source-item py-sm-3">
                <select id="selectpickerSearch" class="selectpicker w-100 mb-3" data-style="btn-default" data-live-search="true">
                  <optgroup label="Minstry 1">
                    <option>CTD N>1</option>
                    <option>CTD N>2</option>
                    <option>CTD N>3</option>
                  </optgroup>
                  <optgroup label="Minstry 2">
                    <option>CTD N>1</option>
                    <option>CTD N>2</option>
                    <option>CTD N>3</option>
                  </optgroup>
                </select>
                <div class="mb-3" data-repeater-list="">
                  <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="item-a">
                    <div class="d-flex border rounded position-relative pe-0">
                      <div class="row w-100 m-0 p-3">
                        <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                          <p class="mb-2 repeater-title">Lot</p>
                          <select id="" class="selectpicker w-100 mb-2" data-select-picker="true" data-style="btn-default" data-live-search="true">
                              <option selected disabled>Select Lot</option>
                              <option>Lot 1</option>
                              <option>Lot 2</option>
                              <option>Lot 3</option>
                              <option>Lot 4</option>
                              <option>Lot 5</option>
                          </select>

                          <textarea class="form-control" rows="2" placeholder="Lots subject" readonly></textarea>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                          <span>175 000 F CFA</span>
                          <div class="submitedCompaniesName py-3">
                            <label for="TagifyCustomListSuggestion" class="form-label">Consortiam of companies for this Lot.</label>
                            <input id="" name="TagifyCustomListSuggestion" class="form-control TagifyCustomListSuggestion" placeholder="select Company" value="">
                            <span style="color: rgb(255, 133, 20)">Choose the companies with which you  would like to be in consortium for this lot.</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                        <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete="item-a"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" class="btn btn-primary" data-repeater-create="">Add Lot</button>
                  </div>
                </div>
              </form> 
            @break        
            @case("Pay to Consult")
              <form class="source-item py-sm-3">
                <div class="mb-3" data-repeater-list="">
                  <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="item-a">
                    <div class="d-flex border rounded position-relative pe-0">
                      <div class="row w-100 m-0 p-3">
                        <div class="col-12 p-0 mb-3">
                          <p class="mb-2 repeater-title">Item</p>
                          <select id="selectpickerSearch" class="selectpicker w-100 mb-3" data-style="btn-default" data-live-search="true">
                            <optgroup label="Minstry 1">
                              <option>CTD N>1</option>
                              <option>CTD N>2</option>
                              <option>CTD N>3</option>
                            </optgroup>
                            <optgroup label="Minstry 2">
                              <option>CTD N>1</option>
                              <option>CTD N>2</option>
                              <option>CTD N>3</option>
                            </optgroup>
                          </select>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                          <textarea class="form-control" rows="2" placeholder="Lots subject" readonly></textarea>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                          <span>175 000 F CFA</span>
                        </div>
                      </div>
                      <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                        <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete="item-a"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" class="btn btn-primary" data-repeater-create="">Add CTD</button>
                  </div>
                </div>
              </form> 
            @break       
            @case("Pay for Package")
              <form class="source-item py-sm-3">
                <div class="mb-3">
                  <div class="repeater-wrapper pt-0 pt-md-4">
                    <div class="d-flex border rounded position-relative pe-0">
                      <div class="row w-100 m-0 p-3">
                        <div class="col-12 p-0 mb-3">
                          <p class="mb-2 repeater-title">Item</p>
                          <select id="selectPlan" class="selectpicker w-100 mb-3" data-style="btn-default" data-live-search="true" >
                            <option value="" selected>Select plan</option>
                            <option value="Starter">Starter</option>
                            <option value="Pro">Pro</option>
                            <option value="Enterprise">Enterprise</option>
                          </select>
                          <div class="pb-sm-5 pb-2 rounded-top">
                            <div class="container p-0">
                              <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pb-3">
                                <label class="switch switch-primary me-0">
                                  <span class="switch-label">Monthly</span>
                                  <input type="checkbox" class="switch-input price-duration-toggler" checked />
                                  <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                  </span>
                                  <span class="switch-label">Annual</span>
                                </label>
                              </div>
                        
                              <div class="row m-0 gy-1 pack-container">
                                <!-- Starter -->
                                <div id="Starter" class="col-xl mb-lg-0 lg-4 pack ps-0">
                                  <div class="card border shadow-none">
                                    <div class="card-body">
                                      <h5 class="text-start text-uppercase">Starter</h5>
                        
                                      <div class="text-center position-relative mb-4 pb-1">
                                        <div class="mb-2 d-flex">
                                          <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                                          <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                                          <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                        </div>
                                        <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 588 / year</small>
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
                                          <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                            <i class="bx bx-check bx-xs"></i>
                                          </span>
                                          Basic support on Github
                                        </li>
                                        <li class="mb-2">
                                          <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                            <i class="bx bx-x fs-5 lh-1"></i>
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
                        
                                      <a href="javascript:void(0)" class="btn btn-label-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPayCash">Pay Cash</a>
                                    </div>
                                  </div>
                                </div>
                        
                                <!-- Exclusive -->
                                <div id="Pro" class="col-xl mb-lg-0 lg-4 pack">
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
                                        <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,188 / year</small>
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
                        
                                      <a href="javascript:void(0)" class="btn btn-label-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPayCash">Pay Cash</a>
                                    </div>
                                  </div>
                                </div>
                        
                                <!-- Enterprise -->
                                <div id="Enterprise" class="col-xl mb-lg-0 lg-4 pack pe-0">
                                  <div class="card border shadow-none">
                                    <div class="card-body">
                                      <h5 class="text-start text-uppercase">ENTERPRISE</h5>
                        
                                      <div class="text-center position-relative mb-4 pb-1">
                                        <div class="mb-2 d-flex">
                                          <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                                          <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                                          <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                        </div>
                                        <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,788 / year</small>
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
                        
                                      <a href="javascript:void(0)" class="btn btn-label-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPayCash">Pay Cash</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form> 
            @break       
            @endswitch
            {{-- @if ($type == "Pay to Postulate")
              <form class="source-item py-sm-3">
                <select id="selectpickerSearch" class="selectpicker w-100 mb-2" data-style="btn-default" data-live-search="true">
                  <optgroup label="Minstry 1">
                    <option>CTD N>1</option>
                    <option>CTD N>2</option>
                    <option>CTD N>3</option>
                  </optgroup>
                  <optgroup label="Minstry 2">
                    <option>CTD N>1</option>
                    <option>CTD N>2</option>
                    <option>CTD N>3</option>
                  </optgroup>
                </select>
                <div class="mb-3" data-repeater-list="">
                  <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="item-a">
                    <div class="d-flex border rounded position-relative pe-0">
                      <div class="row w-100 m-0 p-3">
                        <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                          <p class="mb-2 repeater-title">Lot</p>
                          <select id="" class="selectpicker w-100 mb-2" data-select-picker="true" data-style="btn-default" data-live-search="true">
                              <option selected disabled>Select Lot</option>
                              <option>Lot 1</option>
                              <option>Lot 2</option>
                              <option>Lot 3</option>
                              <option>Lot 4</option>
                              <option>Lot 5</option>
                          </select>

                          <textarea class="form-control" rows="2" placeholder="Lots subject" readonly></textarea>
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-3">
                          <span>175 000 F CFA</span>
                          <div class="submitedCompaniesName py-3">
                            <label for="TagifyCustomListSuggestion" class="form-label">Consortiam of companies for this Lot.</label>
                            <input id="" name="TagifyCustomListSuggestion" class="form-control TagifyCustomListSuggestion" placeholder="select Company" value="">
                            <span style="color: rgb(255, 133, 20)">Choose the companies with which you  would like to be in consortium for this lot.</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                        <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete="item-a"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" class="btn btn-primary" data-repeater-create="">Add Lot</button>
                  </div>
                </div>
              </form>                 
            @else               
            @endif --}}        
          </div>
        </div>
        <hr class="my-4 mx-n4" />

        <div class="row py-sm-3">
          <div class="col-md-7 mb-md-0 mb-3 border-end">
            <div class="d-flex flex-column mb-3">
              <label for="salesperson" class="form-label me-5 fw-semibold">Salesperson:</label>
              <span class="badge bg-label-info">Yabre Mohammad</span>
              <small class="text-mute text-warning">Super Admin(DAC-Rapide)</small>
            </div>
            <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" />
          </div>
          <div class="col-md-5 d-flex justify-content-end">
            @switch($type)
            @case("Pay to Postulate")
              <div class="invoice-calculations">
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">Public Treasure:</span>
                  <span class="fw-semibold">150 000 F CFA</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">DAC-Rapide Commission:</span>
                  <span class="fw-semibold">15000 F CFA</span>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <span class="w-px-100">Total:</span>
                  <span class="fw-semibold">165 000 F CFA</span>
                </div>
              </div>
            @break
         
            @case("Pay to Consult")
              <div class="invoice-calculations">
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">DAC-Rapide Commission:</span>
                  <span class="fw-semibold">15000 F CFA</span>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <span class="w-px-100">Total:</span>
                  <span class="fw-semibold">75 00 F CFA</span>
                </div>
              </div>
            @break
            @case("Pay for Package")
              <div class="invoice-calculations">
                <div class="d-flex justify-content-between mb-2">
                  <span class="w-px-100">DAC-Rapide Commission:</span>
                  <span class="fw-semibold">15000 F CFA</span>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <span class="w-px-100">Total:</span>
                  <span class="fw-semibold">75 00 F CFA</span>
                </div>
              </div>
            @break
            @endswitch

          </div>
        </div>

        <hr class="my-4" />

        <div class="row">
          <div class="col-12">
            <div class="mb-3">
              <textarea class="form-control" rows="2" id="note" placeholder="I was a pleasure work with you & your team. We hope you will keep keep in mind for future Call for Tender. Thank You!"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Add-->

  <!-- Invoice Actions -->
  <div class="col-lg-3 col-12 invoice-actions">
    <div class="card mb-4">
      <div class="card-body">
        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-paper-plane bx-xs me-3"></i>Send Invoice</span>
        </button>
        <a onclick="preview()" href="javascript:void(0)" class="btn btn-label-secondary d-grid w-100 mb-3">Preview</a>
        <button type="button" class="btn btn-label-secondary d-grid w-100 mb-3">Save</button>
        <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPayCash">
          <span class="d-flex align-items-center justify-content-center text-nowrap">Pay Cash</span>
        </button>
      </div>
    </div>
    <div>
      <div class="mb-3">
              <label for="select2Multiple" class="form-label">Accept payments via</label>
        <select id="select2Multiple" class="select2 form-select" multiple>
          <optgroup label="Payment method">
            <option value="Bank Account">Bank Account</option>
            <option value="Paypal">Paypal</option>
            <option value="Card">Credit/Debit Card</option>
            <option value="Orange Money">Orange Money</option>
            <option value="MobiCash">MobiCash</option>
            <option value="MTN Cash">MTN Cash</option>
          </optgroup>
        </select>
      </div>

      <div class="d-flex justify-content-between mb-2">
        <label for="payment-terms" class="mb-0">Payment Terms</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="payment-terms" checked="">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <label for="client-notes" class="mb-0">Client Notes</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="client-notes">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
      <div class="d-flex justify-content-between">
        <label for="payment-stub" class="mb-0">Payment Stub</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="payment-stub">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCompany"
  aria-labelledby="offcanvasAddCompanyLabel">
  <div class="offcanvas-header border-bottom">
    <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add New Customer.</h6>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
    <form id="" class="add-new-pack pt-0" >
      {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
      <div class="my-3 form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Name *</label>      
      </div>
      <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Company Name *</label>      
      </div>
      <div class="mb-3 form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Email *</label>      
      </div>
      <div class="mb-3 form-floating">
        <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Address</label>
      </div>
      <div class="mb-3 form-floating">
        <select id="floatingSelect" name="countryFilter" class="countryFilter form-select" aria-label="Floating label select example">
          <option value="" selected>Select Country</option>
          @foreach ($countryData as $item)
            <option value="{{$item}}">{{$item}}</option>
          @endforeach
          {{-- <option value="Bangladesh">Bangladesh</option> --}}
          {{-- <option value="Burkina Faso">Burkina Faso</option> --}}
        </select>
      </div>
      <div class="mb-3 form-floating">
        <input type="number" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Number *</label>  
      </div>
      <div class="mt-3 d-flex justify-content-between">
        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>
  </div>
</div>
<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasPayCash"
  aria-labelledby="offcanvasPayCashLabel">
  <div class="offcanvas-header border-bottom">
    <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Cash Payment</h6>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
    @switch($type)
    @case("Pay to Postulate")
      <form id="" class="add-new-pack pt-0" >
        {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
        <div class="my-3">
          <button class="btn btn-primary">250 000 F CFA</button>
        </div>
        <div class="my-3">
          <span class="d-block">From</span>
          <div class="card alert alert-success">
            <div class="card-body py-1 px-1">
              <div class="icon-box d-flex">
                <span class="badge badge-center rounded-pill bg-info w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
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
                <span class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
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
            <span>By using Cash payment on behalf of the customers, You are deemed to have collected the money.</span>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Pay</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    @break
 
    @case("Pay to Consult")
      <form id="" class="add-new-pack pt-0" >
        {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
        <div class="my-3">
          <button class="btn btn-primary">250 000 F CFA</button>
        </div>
        <div class="my-3">
          <span class="d-block">From</span>
          <div class="card alert alert-success">
            <div class="card-body py-1 px-1">
              <div class="icon-box d-flex">
                <span class="badge badge-center rounded-pill bg-info w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
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
                <span class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
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
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat alias, vitae nostrum reprehenderit ipsam voluptatem corporis optio sint porro, minus laudantium!</span>
            <hr>
            <h6 class="alert-heading mb-1">CTD ID [2]</h6>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repellat alias, vitae nostrum reprehenderit ipsam voluptatem corporis optio sint porro, minus laudantium!</span>
          </div>
        </div>
        <div class="my-3">
          <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading mb-1">Warning!</h6>
            <span>By using Cash payment on behalf of the customers, You are deemed to have collected the money.</span>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Pay</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    @break
    @case("Pay for Package")
      <form id="" class="add-new-pack pt-0" >
        {{-- <h3 @class(['text-center','h5', 'font-bold' => true])>Cash Payment</h3> --}}
        <div class="my-3">
          <button class="btn btn-primary">250 000 F CFA</button>
        </div>
        <div class="my-3">
          <span class="d-block">From</span>
          <div class="card alert alert-success">
            <div class="card-body py-1 px-1">
              <div class="icon-box d-flex">
                <span class="badge badge-center rounded-pill bg-info w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
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
                <span class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40 me-2"><i class="bx bx-user bx-xs"></i></span>
                <div>
                <div class="user-name">COGEA International</div>
                <small class="text-muted">ypottiec@privacy.gov.au</small>                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3">
          <span>Item</span>
          <div id="Enterprise" class="col-xl mb-lg-0 lg-4 pack">
            <div class="card border shadow-none">
              <div class="card-body">
                <h5 class="text-start text-uppercase">ENTERPRISE</h5>
  
                <div class="text-center position-relative mb-4 pb-1">
                  <div class="mb-2 d-flex">
                    <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                    <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                    <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                  </div>
                  <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,788 / year</small>
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
              </div>
            </div>
          </div>
        </div>
        <div class="my-3">
          <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading mb-1">Warning!</h6>
            <span>By using Cash payment on behalf of the customers, You are deemed to have collected the money.</span>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Pay</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    @break
 
    @default
        Payment Not Available!
    @endswitch

  </div>
</div>
<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
<!-- /Offcanvas -->
<Script>  
// $(function () {
//     $('#selectPlan').change(function () {
//       console.log($(this).val());
//         // $('.pack').hide();
//         // $('.pack').find('#' + $(this).val()).fadeIn('slow');
//     });
// });
  function preview() {
    var e = document.getElementById("ddlViewBy").value;
   console.log();
   const redircet= "/admin/invoice/preview?"+"type=<?php echo $type; ?>&company="+e;
   window.location.href=redircet;
  // console.log(route);
  }

 

</Script>
@endsection
