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

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-9">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-style2 mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">Homepage</a>
                                </li>
                                <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Statistics</a>    
                                </li>
                                <li class="breadcrumb-item active">Create</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
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

                        <div class="col-md-12 ps-3 mb-3 p-0">

                            <form action="" method="post">
                                <label for="filepond">Image*</label>
                                <input type="file" 
                                    class="filepond"
                                    name="filepond"
                                    multiple
                                    data-max-file-size="3MB"
                                    data-max-files="3" />
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Title</label>
                                            </div>
                                            <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Font size</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="classes are seperated by space." required>
                                                <label for="floatingInput">Enter Classes</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <textarea type="" class="form-control" id="floatingInput" placeholder="" required rows="3"></textarea>
                                                <label for="floatingInput">Sub-title</label>
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Sub-Title font size</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="" required >
                                                <label for="floatingInput">Button Text</label>
                                              </div>
                                              <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="" required>
                                                <label for="floatingInput">Button font size</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="classes are seperated by space." required>
                                                <label for="floatingInput">Enter Classes</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="" required >
                                                <label for="floatingInput">Button URL</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="" required >
                                                <label for="floatingInput">Serial Number</label>
                                                <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the feature will be shown.</span>
                                              </div>
                                        </div>
                                    </div>
                                    <input class="success" type="submit" value="Create!">
                            </form>

                              {{-- <div class="row">
                                <div class="col-12">
                                    <h6 class="text-muted mt-3">Thumbs Gallery</h6>
                                    <div id="swiper-gallery">
                                      <div class="swiper gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 1</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/5.jpg')}})">Slide 2</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/7.jpg')}})">Slide 3</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/10.jpg')}})">Slide 4</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/16.jpg')}})">Slide 5</div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next swiper-button-white"></div>
                                        <div class="swiper-button-prev swiper-button-white"></div>
                                      </div>
                                      <div class="swiper gallery-thumbs">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 1</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/5.jpg')}})">Slide 2</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/7.jpg')}})">Slide 3</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/10.jpg')}})">Slide 4</div>
                                          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/16.jpg')}})">Slide 5</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div> --}}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>    

@endsection
