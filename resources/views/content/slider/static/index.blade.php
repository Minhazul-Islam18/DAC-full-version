@extends('layouts/layoutMaster')

@section('title', 'Create Slider')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/ui-carousel.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-carousel.js')}}"></script>
@endsection

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12 mt-4">

            <div class="row">

                <div class="col-md-12 p-0">
                    <div class="row">
                        <div class="col-9 p-0">
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
                                <li class="breadcrumb-item active">Static</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3 p-0">
                            <form action="" method="POST">
                                <select name="lang" id="lang" class="form-select">
                                    <optgroup>
                                        <option value="" selected>Language</option>
                                        <option value="en">English</option>
                                        <option value="ar">Arabic</option>
                                        <option value="fr">French</option>
                                    </optgroup>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 ps-3 my-3 p-0">

                            <form action="" method="post">
                                <label for="filepond"></label>
                                <input type="file" 
                                    class="filepond"
                                    name="filepond"
                                    multiple
                                    data-max-file-size="3MB"
                                    data-max-files="3" />
                                    <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are allowed.</span>
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter title" required>
                                                <label for="floatingInput">Title</label>
                                            </div>
                                            {{-- <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color"> --}}
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="" value="26" required>
                                                <label for="floatingInput">Font size</label>
                                            </div>
                                            {{-- <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="classes are seperated by space." required>
                                                <label for="floatingInput">Enter Classes</label>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <textarea type="" class="form-control" id="floatingInput" placeholder="Write Text." required rows="3"></textarea>
                                                <label for="floatingInput">Text</label>
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" value="60" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Text font size</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter button text(Ex: Learn more!)" required >
                                                <label for="floatingInput">Button Text</label>
                                              </div>
                                              {{-- <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color"> --}}
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" value="14" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Button font size</label>
                                            </div>
                                            {{-- <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="classes are seperated by space." required>
                                                <label for="floatingInput">Enter Classes</label>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter button URL" required >
                                                <label for="floatingInput">Button URL</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                     <input class="success" type="submit" value="Update!">   
                                    </div>
                                    
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>    

@endsection
