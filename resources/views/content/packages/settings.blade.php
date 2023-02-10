@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />
<link rel="stylesheet" href="https://ghinda.net/css-toggle-switch/dist/toggle-switch.css" />
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
{{-- <script src="{{asset('assets/js/forms-pickers.js')}}"></script> --}}
<script src="{{asset('assets/js/packages-settings.js')}}"></script>
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{asset('assets/js/forms-extras.js')}}"></script>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-9">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
        <li class="breadcrumb-item">
            <a href="/admin">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/admin/packages"></a>
            All Packages</li>
        <li class="breadcrumb-item active">Package Categories</li>
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
        <form class="d-flex flex-column align-items-center" action="" method="post">
            <div class="settings">
                <div class="sth-title">Package Category </div>
                <div class="switch-block">
                    <label class="switch-light switch-candy">
                      <input type="checkbox" name="" id="" />
                      <span>
                        <span>Active</span>
                        <span>Deactive</span>
                        <a></a>
                      </span>
                    </label>
                </div>          
            </div>
            <div class="settings">
                <div class="sth-title">Badge </div>
                <div class="switch-block">
                    <label class="switch-light switch-candy">
                      <input type="checkbox" name="" id="" />
                      <span>
                        <span>Active</span>
                        <span>Deactive</span>
                        <a></a>
                      </span>
                    </label>
                </div>          
            </div>
            <div class="settings">
                <div class="sth-title">Monthly </div>
                <div class="switch-block">
                    <label class="switch-light switch-candy">
                      <input type="checkbox" name="" id="" />
                      <span>
                        <span>Active</span>
                        <span>Deactive</span>
                        <a></a>
                      </span>
                    </label>
                </div>          
            </div>
            <div class="settings">
                <div class="sth-title">Yearly </div>
                <div class="switch-block">
                    <label class="switch-light switch-candy">
                      <input type="checkbox" name="" id="" />
                      <span>
                        <span>Active</span>
                        <span>Deactive</span>
                        <a></a>
                      </span>
                    </label>
                </div>           
            </div>        
            <div class="settings">
                <div class="sth-title">Recurring Billing / Subscription </div>
                <div class="switch-block">
                    <label class="switch-light switch-candy">
                      <input type="checkbox" name="" id="" checked />
                      <span>
                        <span>Active</span>
                        <span>Deactive</span>
                        <a></a>
                      </span>
                    </label>
                </div>
                <span class="usrWarn">
                    Recurring Billing / Subscription is only allowed for registered user.
                </span>           
            </div>
            <div class="settings">
                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="floatingTitle" placeholder="Enter Day">
                    <label for="floatingTitle">Remind before (Days)</label>
                </div>
                <span class="usrWarn">
                    Specefy how many days before you want to remind your customers about subscription expiration. (Via Mail) 
                </span>
            </div> 
            <input type="submit" value="Update" class="btn btn-info mt-4">           
        </form>

    </div>
</div>
@endsection
