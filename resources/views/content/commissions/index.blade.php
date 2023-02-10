@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jszip/jszip.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>
@endsection

@section('page-script')
{{-- <script src="{{asset('assets/js/forms-pickers.js')}}"></script> --}}
<script src="{{asset('assets/js/commissions-list.js')}}"></script>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
        <li class="breadcrumb-item">
            <a href="/admin">Home</a>
        </li>
        <li class="breadcrumb-item active">Commission List</li>
        </ol>
    </nav>
    </div>
  </div>
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Commissions on pay to postulate.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,45900 F CFA</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>DAC-Rapide</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Commissions on pay to postulate.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,5679200 F CFA</h4>
              <small class="text-success">(-18%)</small>
            </div>
            <small>PO. </small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Commissions on pay to Consult.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,45900 F CFA</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>DAC-Rapide</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Commissions on pay to Consult.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,5679200 F CFA</h4>
              <small class="text-success">(-18%)</small>
            </div>
            <small>PO. </small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Users List Table -->
<div class="card py-4">
    <!-- Begin Content		-->
    <div class="container">
        <h4>Filter:</h4>
        <div class="filterable">
          <div class="dropFilter">
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
            <div class="country-filter">
              {{-- <select id="countryFilter" name="countryFilter" class="form-control">
              <option value="" selected>Country</option>
              <option value="">Show All</option>
              <option value="Burkina Faso">BFA</option>
              <option value="Bangladesh">BAN</option>
              </select> --}}
              <select id="" class="countryFilter select2 form-select">
                  <option value="" selected>Country</option>
                  @foreach ($countryData as $item)
                      <option value="{{$item}}">{{$item}}</option>
                  @endforeach
                </select>
            </div>
            <div class="lots-filter">
                <select id="" name="lotsFilter" class="lotsFilter form-select">
                <option value="" selected>Number of Lots</option>
                <option value="">Show All</option>
                <option value="4">4</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
            </div>
            <div class="commission-type">
                <select name="commissionType" id="commissionType" class="form-select">
                    <optgroup>
                        <option value="" selected>Commission type</option>
                        <option value="">Type 1</option>
                        <option value="">Type 2</option>
                    </optgroup>
                </select>
            </div>
            <div class="range-filter">
                <div class="input-group input-daterange bs-datepicker-daterange" id="">
                <input type="text" id="dateRangePicker" placeholder="MM/DD/YYYY" class="form-control" />
                <span class="input-group-text">to</span>
                <input type="text" placeholder="MM/DD/YYYY" class="form-control" />
                </div>
            </div>
        </div>
        </div>
        
        
        <table class="table table-striped table-hover dt-responsive" id="dataTable">
            <caption class="sr-only">Licensing Bodies</caption>
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Country</th>
                    <th scope="col">CTD ID</th>
                    <th scope="col">Number of Lots</th>
                    <th scope="col">Commission of DAC-Rapide</th>
                    <th scope="col">Commission of PO</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tfoot class="hidden">
                <tr>
                    <th scope="col">Country</th>
                    <th scope="col">CTD ID</th>
                    <th scope="col">Number of Lots</th>
                    <th scope="col">Commission of DAC-Rapide</th>
                    <th scope="col">Commission of PO</th>
                    <th scope="col">Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                            <div class="icn">
                                <svg version="1.1" id="Burkina_Faso" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="auto" viewBox="0 0 4000 2498" style="enable-background:new 0 0 4000 2498;" xml:space="preserve" width="44px">
                                    <rect style="fill:#EE2B33;" width="4000" height="1313.935"/>
                                    <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178"/>
                                    <polygon style="fill:#F9D10D;" points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 "/>
                                    </svg></div>   
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">BFA</div>
                                <div class="full-frm">Burkina Faso</div>
                            </div>
                        </div>
                        <td>6594232</td>
                        <td>4</td>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                            <div class="icn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 12"><path fill="#006a4e" d="M0 0h20v12H0z"/><circle cx="9" cy="6" r="4" fill="#f42a41"/></svg></div>   
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">BAN</div>
                                <div class="full-frm">Bangladesh</div>
                            </div>
                        </div>
                        <td>6594232</td>
                        <td>4</td>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                            <div class="icn">
                                <svg version="1.1" id="Burkina_Faso" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="auto" viewBox="0 0 4000 2498" style="enable-background:new 0 0 4000 2498;" xml:space="preserve" width="44px">
                                    <rect style="fill:#EE2B33;" width="4000" height="1313.935"/>
                                    <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178"/>
                                    <polygon style="fill:#F9D10D;" points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 "/>
                                    </svg></div>   
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">BFA</div>
                                <div class="full-frm">Burkina Faso</div>
                            </div>
                        </div>
                        <td>6594232</td>
                        <td>4</td>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                            <div class="icn">
                                <svg version="1.1" id="Burkina_Faso" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="auto" viewBox="0 0 4000 2498" style="enable-background:new 0 0 4000 2498;" xml:space="preserve" width="44px">
                                    <rect style="fill:#EE2B33;" width="4000" height="1313.935"/>
                                    <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178"/>
                                    <polygon style="fill:#F9D10D;" points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 "/>
                                    </svg></div>   
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">BFA</div>
                                <div class="full-frm">Burkina Faso</div>
                            </div>
                        </div>
                        <td>6594232</td>
                        <td>3</td>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                            <div class="icn">
                                <svg version="1.1" id="Burkina_Faso" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="auto" viewBox="0 0 4000 2498" style="enable-background:new 0 0 4000 2498;" xml:space="preserve" width="44px">
                                    <rect style="fill:#EE2B33;" width="4000" height="1313.935"/>
                                    <rect y="1252.822" style="fill:#009F51;" width="4000" height="1245.178"/>
                                    <polygon style="fill:#F9D10D;" points="2000,782.659 2111.883,1127 2473.944,1127 2181.031,1339.729 2292.914,1684.026   2000,1471.19 1707.086,1683.994 1818.969,1339.734 1526.056,1127 1888.117,1127 "/>
                                    </svg></div>   
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">BFA</div>
                                <div class="full-frm">Burkina Faso</div>
                            </div>
                        </div>
                        <td>6594232</td>
                        <td>2</td>
                        <td>62 40000 F CFA</td>
                        <td>78 40000 F CFA</td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
