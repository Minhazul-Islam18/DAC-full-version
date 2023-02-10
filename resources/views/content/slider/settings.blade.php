@extends('layouts/layoutMaster')

@section('title', 'Slider Settings')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{asset('assets/js/forms-typeahead.js')}}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                <li class="breadcrumb-item">
                    <a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Homepage</a>
                </li>
                <li class="breadcrumb-item">
                <a href="javascript:void(0);">Sliders</a>    
                </li>
                <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
    <div class="col-md-12 mb-4">
            <label for="selectpickerBasic" class="form-label">Hero version</label>
            <div class="dropdown bootstrap-select w-100 dropup"><select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default" tabindex="null">
              <option>Static Version</option>
              <option>Slider Version</option>
              <option>Video Version</option>
            </select>
            </div>
       <span style="color: #e85903;font-weight: 600;">* Hero version is the one that will be displyed on the homepage .</span>   
    </div>
          <div class="col-12 d-flex justify-content-center align-items-center flex-column">

          <input class="success" type="submit" value="Update!">
          </div>
          
    </div>
</div>
@endsection
