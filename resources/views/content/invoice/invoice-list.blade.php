@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />
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
{{-- <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script> --}}
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
{{-- <script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/invoice-list.js')}}"></script>
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
            <option value="{{$item}}">{{$item}}</option>
          @endforeach
          {{-- <option value="Bangladesh">Bangladesh</option> --}}
          {{-- <option value="Burkina Faso">Burkina Faso</option> --}}
        </select>
      </div>
      <div class="status">
        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
          <option value="" selected>Invoice Status</option>
          <option value="Paid">Paid</option>
          <option value="Unpaid">Unpaid</option>
        </select>
      </div>
      <div class="status">
        <select name="CTDstatusFilter" id="CTDstatusFilter" class="form-select CTDstatusFilter">
          <option value="" selected>CTD Status</option>
          <option value="Expired">Expired</option>
          <option value="Non-expired">Non-expired</option>
        </select>
      </div>
      <div class="status">
        <select name="paymentMethod" id="paymentMethod" class="form-select paymentMethod">
          <option value="" selected>Payment method</option>
          <option value="PayPal">PayPal</option>
          <option value="Bank Transfer">Bank Transfer</option>
        </select>
      </div>
      <div class="wallet">
        <select name="walletOption" id="walletOption" class="form-select walletOption">
          <option value="" selected>Wallet</option>
          <option value="Option 1">Option 1</option>
          <option value="Option 2">Option 2</option>
        </select>
      </div>
      <div class="package">
        <select name="pakageSubscription" id="pakageSubscription" class="form-select pakageSubscription">
          <option value="" selected>Package Subscription</option>
          <option value="Option 1">Option 1</option>
          <option value="Option 2">Option 2</option>
        </select>
      </div>
    </div>
  </div>

    <table id="dataTable" class="table table-striped table-hover dt-responsive">
      <caption class="sr-only"></caption>
      <thead class="bg-primary">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col"><i class='bx bx-trending-up'></i></th>
          <th scope="col">Client</th>
          <th scope="col">Total (F CFA)</th>
          <th scope="col text-truncate">Issued Date</th>
          <th scope="col">Balance</th>
          <th scope="col cell-fit">Actions</th>
      </tr>
      </thead>
      <tfoot class="hidden">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col"><i class='bx bx-trending-up'></i></th>
            <th scope="col">Client</th>
            <th scope="col">Total (F CFA)</th>
            <th scope="col text-truncate">Issued Date</th>
            <th scope="col">Balance</th>
            <th scope="col cell-fit">Actions</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>
            <a href="invoice/preview">#5089BFA</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"
                ><i class="bx bxs-paper-plane"></i></span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >JK</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Jamal Kerrod</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
                <span class="d-none">Burkina Faso</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">930777</span>930777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">PayPal</span>
            <span class="d-none">Expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089BFA</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"
                >PS</span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >JK</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Jamal Kerrod</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
                <span class="d-none">Burkina Faso</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">930777</span>930777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">PayPal</span>
            <span class="d-none">Expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089BFA</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40"
                ><i class="bx bxs-paper-plane"></i></span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >JK</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Jamal Kerrod</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
                <span class="d-none">Burkina Faso</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">930777</span>930777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">PayPal</span>
            <span class="d-none">Expired</span>
            <span class="badge bg-label-warning"> Unpaid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089RCI</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"
                ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-eye-check-outline" width="24" height="24" viewBox="0 0 24 24"><path d="M23.5,17L18.5,22L15,18.5L16.5,17L18.5,19L22,15.5L23.5,17M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M12,4.5C17,4.5 21.27,7.61 23,12C22.75,12.65 22.44,13.26 22.08,13.85C21.5,13.5 20.86,13.25 20.18,13.12L20.82,12C19.17,8.64 15.76,6.5 12,6.5C8.24,6.5 4.83,8.64 3.18,12C4.83,15.36 8.24,17.5 12,17.5L13.21,17.43C13.07,17.93 13,18.46 13,19V19.46L12,19.5C7,19.5 2.73,16.39 1,12C2.73,7.61 7,4.5 12,4.5Z"/></svg></span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >AH</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Ahmad Haq</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
              <span class="d-none">Bangladesh</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">3077</span>530777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">Bank Transfer</span>
            <span class="d-none">Non-expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089RCI</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"
                ><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
                  <g>
                    <path style="fill:#BDC3C7;" d="M58,40.5H8v-26h50V40.5z M10,38.5h46v-22H10V38.5z"/>
                    <path style="fill:#BDC3C7;" d="M9,47.5c-0.553,0-1-0.447-1-1v-7c0-0.553,0.447-1,1-1s1,0.447,1,1v7C10,47.053,9.553,47.5,9,47.5z"/>
                    <circle style="fill:#556080;" cx="19" cy="51.5" r="4"/>
                    <circle style="fill:#556080;" cx="43" cy="51.5" r="4"/>
                    <path style="fill:#BDC3C7;" d="M52,47.5H9c-0.553,0-1-0.447-1-1s0.447-1,1-1h43c0.553,0,1,0.447,1,1S52.553,47.5,52,47.5z"/>
                    <circle style="fill:#24AE5F;" cx="33" cy="15.5" r="13"/>
                    <path style="fill:#FFFFFF;" d="M31.999,21.5c-0.226,0-0.452-0.076-0.64-0.231l-6-5c-0.424-0.354-0.481-0.984-0.128-1.409   c0.354-0.424,0.982-0.48,1.409-0.128l6,5c0.424,0.354,0.481,0.984,0.128,1.409C32.57,21.378,32.286,21.5,31.999,21.5z"/>
                    <path style="fill:#FFFFFF;" d="M32,21.5c-0.236,0-0.474-0.083-0.664-0.253c-0.413-0.366-0.45-0.999-0.083-1.411l8-9   c0.366-0.414,0.998-0.451,1.411-0.083c0.413,0.366,0.45,0.999,0.083,1.411l-8,9C32.55,21.387,32.275,21.5,32,21.5z"/>
                    <path style="fill:#BDC3C7;" d="M9,7.5H4c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S9.553,7.5,9,7.5z"/>
                    <path style="fill:#BDC3C7;" d="M9,16.5c-0.553,0-1-0.447-1-1v-9c0-0.553,0.447-1,1-1s1,0.447,1,1v9C10,16.053,9.553,16.5,9,16.5z"/>
                    <circle style="fill:#D8625E;" cx="3" cy="6.5" r="3"/>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  </svg></span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >AH</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Ahmad Haq</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
              <span class="d-none">Bangladesh</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">3077</span>530777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">Bank Transfer</span>
            <span class="d-none">Non-expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089BGA</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40"
                ><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 508.4 508.4" style="enable-background:new 0 0 508.4 508.4;" xml:space="preserve">
                  <path style="fill:#EF934A;" d="M422.2,148.8c0-14.8-12.4-26.4-27.2-26.4H58.6c-14.8,0-20.4,3.2-20.4,18V152v40.8v13.6v210.8v17.2  v40.8c0,14.8,10.8,31.2,25.6,31.2H425c14.8,0,29.2-16.4,29.2-31.2v-92.8h1.2c7.6,0,14.8-8.4,14.8-16V312c0-7.6-7.2-9.6-14.8-9.6  h-1.2v-21.2v-74.8v-17.2c0-14.8-10.4-27.2-25.2-27.2h-6.8V148.8z"/>
                  <path style="fill:#E8BB85;" d="M410.2,450.8c0,3.6-2,11.6-5.6,11.6H57.4L47,459.6l-8.8-8.8V218.4h366.4c3.6,0,5.6,0.8,5.6,4.4V450.8  z"/>
                  <path style="fill:#E07D46;" d="M470.2,368.8c0,7.6-6,13.6-13.6,13.6H327.8c-7.6,0-13.6-6-13.6-13.6V312c0-7.6,6-13.6,13.6-13.6  h128.8c7.6,0,13.6,6,13.6,13.6L470.2,368.8L470.2,368.8z"/>
                  <circle style="fill:#B44F2B;" cx="357.4" cy="331.2" r="24"/>
                  <path style="fill:#E07D46;" d="M425.8,162.4c-1.6-13.2-12.8-24-26.8-24H77.4c-6.4,0-12,5.2-12,12c0,6.4,5.2,12,12,12H425.8z"/>
                  <path style="fill:#54B265;" d="M257,203.2l83.6-104.8h-34.4v-96h-100v96h-34.8L257,203.2z"/>
                  <g>
                    <path style="fill:#CCCCCC;" d="M278.6,172.4L278.6,172.4L278.6,172.4z"/>
                    <path style="fill:#CCCCCC;" d="M291,156.8L291,156.8L291,156.8z"/>
                    <path style="fill:#CCCCCC;" d="M190.6,113.2L190.6,113.2L190.6,113.2z"/>
                  </g>
                  <path d="M259,207.2c-1.2,0-2.4-0.4-3.2-1.6L168.2,98.8c-0.8-1.2-1.2-2.8-0.4-4.4c0.8-1.2,2-2.4,3.6-2.4h28.8V4c0-2.4,1.6-4,4-4h100  c2.4,0,4,1.6,4,4v88h32.4c1.6,0,2.8,0.8,3.6,2.4c0.8,1.2,0.4,2.8-0.4,4.4l-81.6,106.8C261.4,206.4,260.2,207.2,259,207.2L259,207.2z   M179.8,100.4l78.8,96.4l73.6-96.4h-28.4c-2.4,0-4-1.6-4-4v-88h-92v88c0,2.4-1.6,4-4,4H179.8z"/>
                  <path d="M433.4,508.4H72.2c-17.6,0-35.6-18-39.6-33.6c0-0.4,0-0.8,0-1.2V198.4c0-2.4,1.6-4,4-4s4,1.6,4,4v274.8  c4,14,19.2,27.2,32,27.2h361.2c12.4,0,18.8-13.6,18.8-26.8v-91.2c0-2.4,1.6-4,4-4s4,1.6,4,4v91.2C460.2,490.8,451,508.4,433.4,508.4  z"/>
                  <path d="M238.2,184.4H68.6c-17.6,0-36.4-2-36.4-25.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12,4,17.2,28.4,17.2h169.6c2.4,0,4,1.6,4,4  S240.6,184.4,238.2,184.4z"/>
                  <path d="M456.2,298.4c-2.4,0-4-1.6-4-4v-95.2c0-11.6-4.4-14.8-18.8-14.8H278.2c-2.4,0-4-1.6-4-4s1.6-4,4-4h155.2  c14,0,26.8,2.8,26.8,22.8v95.2C460.2,296.8,458.6,298.4,456.2,298.4z"/>
                  <path d="M419,145.2c-2.4,0-4-1.6-4-4c0-13.2-3.6-16.8-16-16.8h-72.8c-2.4,0-4-1.6-4-4s1.6-4,4-4H399c17.2,0,24,7.2,24,24.8  C423,143.2,421.4,145.2,419,145.2z"/>
                  <path d="M36.2,418.4c-2.4,0-4-1.6-4-4V139.2c0-0.4,0-0.8,0-1.2c2.8-10,11.6-21.6,39.6-21.6h118c2.4,0,4,1.6,4,4s-1.6,4-4,4h-118  c-18,0-28.8,5.2-32,15.2v274.8C40.2,416.8,38.6,418.4,36.2,418.4z"/>
                  <path d="M456.2,278.4c-2.4,0-4-1.6-4-4v-90.8c0-11.6-4.4-15.2-18.8-15.2H294.2c-2.4,0-4-1.6-4-4s1.6-4,4-4h139.2  c13.2,0,26.8,2.8,26.8,23.2v90.8C460.2,276.8,458.6,278.4,456.2,278.4z"/>
                  <path d="M226.2,168.4h-150c-8.8,0-14.4-10-14.4-19.6c0-10,6-16.4,14.4-16.4h126c2.4,0,4,1.6,4,4s-1.6,4-4,4h-126  c-5.6,0-6.4,5.2-6.4,8.4c0,5.6,2.8,11.6,6.4,11.6h150c2.4,0,4,1.6,4,4S228.6,168.4,226.2,168.4z"/>
                  <path d="M426.6,164.4c-2,0-3.6-1.6-4-3.6c-1.6-11.6-12-20.4-24-20.4h-84.4c-2.4,0-4-1.6-4-4s1.6-4,4-4H399c16,0,30,12,31.6,27.6  c0.4,2-1.2,4-3.6,4.4C427,164.4,427,164.4,426.6,164.4z"/>
                  <path d="M458.6,384.4H330.2c-9.6,0-17.6-8-17.6-17.6v-52.4c0-9.6,8-17.6,17.6-17.6h128.4c9.6,0,17.6,8,17.6,17.6v52.4  C476.2,376.4,468.2,384.4,458.6,384.4z M329.8,304.4c-5.2,0-9.6,4.4-9.6,9.6v52.4c0,5.2,4.4,9.6,9.6,9.6h128.4  c5.2,0,9.6-4.4,9.6-9.6V314c0-5.2-4.4-9.6-9.6-9.6H329.8z"/>
                  <path d="M361.8,360.4c-15.6,0-28-12.8-28-28s12.8-28,28-28s28,12.4,28,28S377.4,360.4,361.8,360.4z M361.8,312.4  c-11.2,0-20,9.2-20,20c0,11.2,9.2,20,20,20c11.2,0,20-9.2,20-20C381.8,321.2,373,312.4,361.8,312.4z"/>
                  <path d="M361.8,344.4c-6.8,0-12-5.2-12-12s5.2-12,12-12c2.4,0,4,1.6,4,4s-1.6,4-4,4s-4,1.6-4,4s1.6,4,4,4s4-1.6,4-4s1.6-4,4-4  s4,1.6,4,4C373.8,339.2,368.2,344.4,361.8,344.4z"/>
                  <path d="M410.6,468.4H64.2c-17.2,0-32-14.8-32-32.4c0-2.4,1.6-4,4-4s4,1.6,4,4c0,13.2,11.2,24.4,24,24.4h342.4l-0.8-78.4  c0-2.4,1.6-4,4-4l0,0c2,0,4,1.6,4,4l0.8,82.4c0,1.2-0.4,2-1.2,2.8C412.6,468,411.8,468.4,410.6,468.4z"/>
                  <path d="M410.6,277.6L410.6,277.6c-2.4,0-4-2-4-4l0.4-48.8H66.6c-9.6,0-20.8,0-27.6-6.8c-4.4-4.4-6.4-10.8-6.4-19.6c0-2.4,1.6-4,4-4  s4,1.6,4,4c0,6.4,1.2,11.2,4.4,14c4.8,4.8,13.6,4.8,22,4.4h2h342.4c1.2,0,2,0.4,2.8,1.2c0.8,0.8,1.2,1.6,1.2,2.8l-0.4,52.8  C414.6,275.6,412.6,277.6,410.6,277.6z"/>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  </svg></span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >JK</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Jamal Kerrod</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
                <span class="d-none">Burkina Faso</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">930777</span>930777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">PayPal</span>
            <span class="d-none">Expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089RCI</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-success w-px-40 h-px-40"
                >
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 506.8 506.8" style="enable-background:new 0 0 506.8 506.8;" xml:space="preserve">
                  <path style="fill:#EF934A;" d="M425.4,149.6c0-14.8-13.6-28.8-28.4-28.8H67c-5.6,0-19.6,1.2-23.2,4.4c-2,2-7.6,5.2-7.6,11.6  c0,4.4-2.8,8.4-2.8,12.8l0.8,3.2l3.2,40.8v13.6v210.4v16.8v40.8c0,14.8,14.4,25.6,29.2,25.6h360c14.8,0,26.8-10.8,26.8-25.6v-94.4  l0,0c7.6,0,16-6.8,16-14.4V312c0-7.6-8.8-11.6-16-11.6l0,0v-18.8v-74.4v-16.8c0-14.8-7.6-29.6-22.8-29.6h-5.2V149.6z"/>
                  <path style="fill:#E8BB85;" d="M410.2,452.8c0,3.6-3.2,6-6.8,6H46.2l-10.4-11.2l2.8-228.8h365.2c3.6,0,6.8,3.2,6.8,6.8v227.2H410.2z  "/>
                  <path style="fill:#E07D46;" d="M469.4,367.2c0,7.6-6,13.6-13.6,13.6H327c-7.6,0-13.6-6-13.6-13.6v-56.8c0-7.6,6-13.6,13.6-13.6  h128.8c7.6,0,13.6,6,13.6,13.6L469.4,367.2L469.4,367.2z"/>
                  <circle style="fill:#B44F2B;" cx="360.6" cy="333.2" r="23.6"/>
                  <path style="fill:#E07D46;" d="M427.4,162c-1.6-13.2-12.8-25.2-26.8-25.2H80.2c-6.4,0-12,6.8-12,13.2c0,6.4,5.2,12,12,12H427.4z"/>
                  <path style="fill:#DF5C4E;" d="M205.4,204.8h100v-96h34.8L253,2.4l-87.2,106.4h39.6L205.4,204.8L205.4,204.8z"/>
                  <path d="M303.4,210.8h-100c-2.4,0-4-1.6-4-4v-92h-29.6c-1.6,0-2.8-0.8-3.6-2.4c-0.8-1.2-0.4-3.2,0.4-4.4L253.8,1.6  c0.8-0.8,2-1.6,3.2-1.6s2.4,0.4,3.2,1.6l82,106.4c0.8,1.2,1.2,2.8,0.4,4.4s-2,2.4-3.6,2.4h-31.6v92  C307.4,209.2,305.8,210.8,303.4,210.8z M207.4,202.8h92v-92c0-2.4,1.6-4,4-4H331l-74-96l-78.8,96h25.2c2.4,0,4,1.6,4,4V202.8z"/>
                  <path d="M432.6,506.8H71.4c-16.8,0-35.2-14.4-39.6-31.6c0-0.4,0-0.8,0-1.2V196.8c0-2.4,1.6-4,4-4s4,1.6,4,4v276.8  c3.6,13.2,18.8,25.2,31.6,25.2h361.2c13.2,0,18.8-12.4,18.8-24.4v-93.6c0-2.4,1.6-4,4-4s4,1.6,4,4v93.6  C459.4,493.6,448.2,506.8,432.6,506.8z"/>
                  <path d="M201.4,182.8h-134c-17.6,0-36-2-36-25.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12,4,17.2,28,17.2h134c2.4,0,4,1.6,4,4  S203.8,182.8,201.4,182.8z"/>
                  <path d="M455.4,296.8c-2.4,0-4-1.6-4-4v-93.2c0-12-5.2-16.8-18.8-16.8H305.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h127.2  c18,0,26.8,8,26.8,24.8v93.2C459.4,295.2,457.8,296.8,455.4,296.8z"/>
                  <path d="M419,143.6c-2.4,0-4-1.6-4-4c0-12.8-4-16.8-17.2-16.8h-92.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h92.8c17.2,0,25.2,7.6,25.2,24.8  C423,141.6,421.4,143.6,419,143.6z"/>
                  <path d="M35.4,416.8c-2.4,0-4-1.6-4-4V139.6c0-0.4,0-0.8,0-1.2c4.8-17.6,23.6-24,39.6-24h130.4c2.4,0,4,1.6,4,4s-1.6,4-4,4H71  c-12.8,0-28,4.4-31.6,17.6v272.8C39.4,415.2,37.8,416.8,35.4,416.8z"/>
                  <path d="M455.4,276.8c-2.4,0-4-1.6-4-4V184c0-12.4-5.2-17.2-18.8-17.2H305.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h127.2  c18,0,26.8,8.4,26.8,25.2v88.8C459.4,275.2,457.8,276.8,455.4,276.8z"/>
                  <path d="M201.4,166.8h-126c-8.8,0-14.4-10-14.4-19.6c0-10,6-16.4,14.4-16.4h126c2.4,0,4,1.6,4,4s-1.6,4-4,4h-126  c-5.6,0-6.4,5.2-6.4,8.4c0,5.6,2.8,11.6,6.4,11.6h126c2.4,0,4,1.6,4,4S203.8,166.8,201.4,166.8z"/>
                  <path d="M427.8,162.8c-2,0-3.6-1.6-4-3.6c-1.2-10.8-13.6-20.4-26-20.4h-92.4c-2.4,0-4-1.6-4-4s1.6-4,4-4h92.8  c16.4,0,32,12.8,34,27.6c0.4,2-1.2,4-3.6,4.4C428.2,162.8,428.2,162.8,427.8,162.8z"/>
                  <path d="M457.8,382.8H329.4c-9.6,0-17.6-8-17.6-17.6v-52.4c0-9.6,8-17.6,17.6-17.6h128.4c9.6,0,17.6,8,17.6,17.6v52.4  C475.4,374.8,467.4,382.8,457.8,382.8z M329,302.8c-5.2,0-9.6,4.4-9.6,9.6v52.4c0,5.2,4.4,9.6,9.6,9.6h128.4c5.2,0,9.6-4.4,9.6-9.6  v-52.4c0-5.2-4.4-9.6-9.6-9.6H329z"/>
                  <path d="M361,361.2c-15.6,0-28-12.8-28-28s12.8-28,28-28s28,12.4,28,28S376.2,361.2,361,361.2z M361,312.8c-11.2,0-20,9.2-20,20  c0,11.2,9.2,20,20,20c11.2,0,20-9.2,20-20S371.8,312.8,361,312.8z"/>
                  <path d="M360.6,345.2c-6.8,0-12-5.2-12-12s5.2-12,12-12c2.4,0,4,1.6,4,4s-1.6,4-4,4s-4,1.6-4,4s1.6,4,4,4s4-1.6,4-4s1.6-4,4-4  s4,1.6,4,4C372.6,339.6,367.4,345.2,360.6,345.2z"/>
                  <path d="M409.8,466.8H63.4c-17.6,0-31.6-14-31.6-31.6c0-2.4,1.6-4,4-4s4,1.6,4,4c0,12.8,10.8,23.6,23.6,23.6h342.4l-0.8-78  c0-2.4,1.6-4,4-4l0,0c2,0,4,1.6,4,4l0.8,82c0,1.2-0.4,2-1.2,2.8C411.8,466.4,410.6,466.8,409.8,466.8z"/>
                  <path d="M409.8,276.8C409.4,276.8,409.4,276.8,409.8,276.8c-2.4,0-4-2-4-4l0.4-50H65c-10,0-20,0-26.8-6.4  c-4.4-4.4-6.4-10.8-6.4-19.2c0-2.4,1.6-4,4-4s4,1.6,4,4c0,6.4,1.2,10.8,4,13.6c4.4,4.4,12.4,4.4,21.2,4.4h2.8h342.4  c1.2,0,2,0.4,2.8,1.2c0.8,0.8,1.2,1.6,1.2,2.8l-0.4,54C413.4,275.2,411.8,276.8,409.8,276.8z"/>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  </svg>
                  </span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >AH</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Ahmad Haq</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
              <span class="d-none">Bangladesh</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">3077</span>530777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">Bank Transfer</span>
            <span class="d-none">Non-expired</span>
            <span class="badge bg-label-success"> Paid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089RCI</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-danger w-px-40 h-px-40"
                >
                <i class="bx bx-cart" aria-hidden="true"></i>
                  </span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >AH</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Ahmad Haq</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
              <span class="d-none">Bangladesh</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">3077</span>530777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">Bank Transfer</span>
            <span class="d-none">Non-expired</span>
            <span class="badge bg-label-danger"> Unpaid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="invoice/preview">#5089RCI</a>
          </td>
          <td>
            <span
              data-bs-toggle="tooltip"
              data-bs-html="true"
              aria-label="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              data-bs-original-title="<span>Sent<br> Balance: 0<br> Due Date: 05/09/2020</span>"
              ><span
                class="badge badge-center rounded-pill bg-label-warning w-px-40 h-px-40"
                >
                <i class="bx bx-cart" aria-hidden="true"></i>
                  </span
            ></span>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary"
                    >AH</span
                  >
                </div>
              </div>
              <div class="d-flex flex-column">
                <a
                  href="http://127.0.0.1:8000/pages/profile-user"
                  class="text-body text-truncate fw-semibold"
                  >Ahmad Haq</a
                ><small class="text-truncate text-muted">user@gmail.com</small>
              <span class="d-none">Bangladesh</span>
              </div>
            </div>
          </td>
          <td><span class="d-none">3077</span>530777</td>
          <td><span class="d-none">20200509</span>09 May 2020</td>
          <td>
            <span class="d-none">Bank Transfer</span>
            <span class="d-none">Non-expired</span>
            <span class="badge bg-label-warning"> Unpaid </span></td>
          <td>
            <div class="d-flex align-items-center">
              <a
                href="javascript:;"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Send Mail"
                data-bs-original-title="Send Mail"
                ><i class="bx bx-send mx-1"></i></a
              ><a
                href="http://127.0.0.1:8000/app/invoice/preview"
                data-bs-toggle="tooltip"
                class="text-body"
                data-bs-placement="top"
                aria-label="Preview Invoice"
                data-bs-original-title="Preview Invoice"
                ><i class="bx bx-show mx-1"></i
              ></a>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"
                  ><i class="bx bx-dots-vertical-rounded"></i
                ></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="javascript:;" class="dropdown-item">Download</a
                  ><a
                    href="invoice/edit"
                    class="dropdown-item"
                    >Edit</a
                  ><a href="javascript:;" class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div>
                  <a
                    href="javascript:;"
                    class="dropdown-item delete-record text-danger"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
      
    </table>
</div>
</div>

@include('_partials/_modals/add-invoice')
@endsection
