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
<script src="{{asset('assets/js/packages-categories.js')}}"></script>
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
        <h4>Filter:</h4>
        <div class="filterable">
          <div class="dropFilter categories">
            <div class="status">
                <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                    <optgroup>
                        <option value="" selected>Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </optgroup>
                </select>
            </div>
        </div>
        </div>
        
        
        <table class="table table-striped table-hover dt-responsive" id="dataTable">
            <caption class="sr-only"></caption>
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Serial number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tfoot class="hidden">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Serial number</th>
                    <th scope="col">Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td> Business</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>7</td>
                    <td>
                        <a href="#"> <i class='bx bx-edit'></i> </a>
                        <a href="#"> <i class='bx bxs-trash'></i> </a>
                        <a href="#"> <i class='bx bx-dots-vertical-rounded' ></i> </a>
                    </td>
                </tr>
                <tr>
                    <td> Business</td>
                    <td><span class="badge bg-danger">Inactive</span></td>
                    <td>7</td>
                    <td>
                        <a href="#"> <i class='bx bx-edit'></i> </a>
                        <a href="#"> <i class='bx bxs-trash'></i> </a>
                        <a href="#"> <i class='bx bx-dots-vertical-rounded' ></i> </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddPackages" aria-labelledby="offcanvasAddPackagesLabel">
  <div class="offcanvas-header border-bottom">
    <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add Packages</h6>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
    <form class="add-new-pack pt-0" id="">
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
      <div class="form-floating my-3">
        <input type="text" class="form-control" id="floatingName" placeholder="Enter Name">
        <label for="floatingName">Name</label>
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
        <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the feature will be shown.</span>
      </div>
      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </form>
  </div>
</div>
@endsection
