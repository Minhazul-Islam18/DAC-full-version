@extends('layouts/layoutMaster')

@section('title', 'Create Slider')
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/ui-carousel.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/ui-carousel.js') }}"></script>
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-12 mt-4">

                <div class="row">

                    <div class="col-md-12">
                        <div class="row g-0">
                            <div class="col-9">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="/admin">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Homepage</a>
                                        </li>
                                        <li class="breadcrumb-item active">Intro</li>
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
                        <div class="row g-0">
                            <div class="col-md-12 mb-3 p-0">

                                <form action="" method="post">
                                    <label for="filepond"></label>
                                    <input type="file" class="filepond" name="filepond" multiple
                                        data-max-file-size="300MB" data-max-files="3" />
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                    required>
                                                <label for="floatingInput">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                    required>
                                                <label for="floatingInput">Video URL</label>
                                                <span style="color: #e85903;font-weight: 600;">* Link will be automatticly
                                                    formatted after submitting form.</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                    required>
                                                <label for="floatingInput">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                    required>
                                                <label for="floatingInput">Button Text</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                                    required>
                                                <label for="floatingInput">Button URL</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input class="success" type="submit" value="Update!">
                                </div>
                            </div>
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
