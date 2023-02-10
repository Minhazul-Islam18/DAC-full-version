@extends('layouts/layoutMaster')

@section('title', 'Dynamic Sliders')

@section('content')
    <div class="row my-4">
        <div class="col-5">
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
                    <li class="breadcrumb-item active">Dynamic</li>
                </ol>
            </nav>
        </div>
        <div class="col-4">
            <form action="" method="POST">
                <select name="lang" id="lang" class="form-select form-select-sm">
                    <optgroup>
                        <option value="" selected>Language</option>
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </optgroup>
                </select>
            </form>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-label-success">
                <a class="text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                    aria-controls="offcanvasEnd">Create!</a>
            </button>
            <div class="col-lg-3 col-md-6">
                <div class="mt-3">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd"
                        aria-labelledby="offcanvasEndLabel">
                        <div class="offcanvas-header border-bottom">
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">Creating Slider</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post">
                                <label class="mb-2" for="filepond"></label>
                                <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                    data-max-files="3" />
                                <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types
                                    are allowed.</span>
                                <div class="row mt-4">
                                    <div class="col-12">
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
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Enter title" required>
                                            <label for="floatingInput">Title</label>
                                        </div>
                                        {{-- <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color"> --}}
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder=""
                                                value="26" required>
                                            <label for="floatingInput">Font size</label>
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
                                            <textarea type="" class="form-control" id="floatingInput" placeholder="Write Text." required rows="3"></textarea>
                                            <label for="floatingInput">Text</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" value="60" id="floatingInput"
                                                placeholder="" required>
                                            <label for="floatingInput">Text font size</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Enter button text(Ex: Learn more!)" required>
                                            <label for="floatingInput">Button Text</label>
                                        </div>
                                        {{-- <label for="exampleColorInput" class="form-label">Text Color.</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color"> --}}
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" value="14" id="floatingInput"
                                                placeholder="" required>
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
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Enter button URL" required>
                                            <label for="floatingInput">Button URL</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder=""
                                                required="">
                                            <label for="floatingInput">Serial Number</label>
                                            <span style="color: #e85903;font-weight: 600;">* The higher the serial number
                                                is, the later the feature will be shown.</span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="d-flex justify-content-between pt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                                <button type="reset" class="btn btn-label-secondary"
                                    data-bs-dismiss="offcanvas">Cancel</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 p-0 d-flex flex-wrap justify-content-around" style="row-gap: 20px">
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/209756/pexels-photo-209756.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/298694/pexels-photo-298694.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/130851/pexels-photo-130851.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/572688/pexels-photo-572688.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/2559941/pexels-photo-2559941.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
            <div class="slider-item-box">
                <img src="https://images.pexels.com/photos/1591373/pexels-photo-1591373.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="">
                <div class="actions">
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-edit'></i> Edit
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a href="" class="btn btn-outline-info">
                        <i class='bx bx-hide'></i> Deactive
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
