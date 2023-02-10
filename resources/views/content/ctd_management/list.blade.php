@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- For Picker: --->
    <script type="text/javascript" src="https://static.filestackapi.com/filestack-js/1.x.x/filestack.min.js"></script>
    <!-- For Viewer: --->
    <script src="https://api.filestackapi.com/filestack.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> --}}
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/ctd-management.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>
@endsection

@section('content')
    <!--/ User Pills -->
    <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 484.955 484.955" xml:space="preserve"
                        width="18px" height="auto"style="fill: #ffffff;">
                        <g>
                            <g>
                                <path
                                    d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5    l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z" />
                                <path
                                    d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2    c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3    c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3    c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4    c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5    c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6    l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6    c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3    c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256    c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z" />
                            </g>
                        </g>
                    </svg> Paid to Postulate
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                    <svg width="18px" height="auto" viewBox="0 0 24 24" id="meteor-icon-kit__regular-file-search"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.6064 17.1922L23.1213 21.7071C23.5118 22.0976 23.5118 22.7308 23.1213 23.1213C22.7308 23.5118 22.0976 23.5118 21.7071 23.1213L17.1922 18.6064C16.0236 19.4816 14.5723 20 13 20C9.13401 20 6 16.866 6 13C6 9.13401 9.13401 6 13 6C16.866 6 20 9.13401 20 13C20 14.5723 19.4816 16.0236 18.6064 17.1922ZM7 2V6C7 6.55228 6.55228 7 6 7H2V21C2 21.5523 2.44772 22 3 22H14C14.5523 22 15 22.4477 15 23C15 23.5523 14.5523 24 14 24H3C1.34315 24 0 22.6569 0 21V6C0 2.68629 2.68629 0 6 0H15C16.6569 0 18 1.34315 18 3V4C18 4.55228 17.5523 5 17 5C16.4477 5 16 4.55228 16 4V3C16 2.44772 15.5523 2 15 2H7ZM2.12602 5H5V2.12602C3.59439 2.4878 2.4878 3.59439 2.12602 5ZM13 18C15.7614 18 18 15.7614 18 13C18 10.2386 15.7614 8 13 8C10.2386 8 8 10.2386 8 13C8 15.7614 10.2386 18 13 18Z"
                            fill="#FFFFFF" />
                    </svg>
                    Paid to Consult</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">
                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 484.955 484.955" xml:space="preserve"
                        width="18px" height="auto" style="fill: #ffffff;">
                        <g>
                            <g>
                                <path
                                    d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2    c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3    c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3    c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4    c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5    c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6    l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6    c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3    c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256    c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755    c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z" />
                            </g>
                        </g>
                    </svg>
                    Cart List
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-wishlist" aria-controls="navs-pills-top-wishlist" aria-selected="false">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" fill="none"
                        height="auto" width="18px" stroke="#fff">
                        <path
                            d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                    </svg>
                    Wishlist
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-approval" aria-controls="navs-pills-top-approval" aria-selected="false">
                    <svg width="20px" height="auto" viewBox="0 0 512 512" version="1.1" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#00ae0d">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <style type="text/css">
                                .st0 {
                                    fill: #f09721;
                                }

                                .st1 {
                                    fill: none;
                                    stroke: #00ae0d;
                                    stroke-width: 32;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-miterlimit: 10;
                                }
                            </style>
                            <g id="Layer_1"></g>
                            <g id="Layer_2">
                                <g>
                                    <path class="st0"
                                        d="M256,43.5C138.64,43.5,43.5,138.64,43.5,256S138.64,468.5,256,468.5S468.5,373.36,468.5,256 S373.36,43.5,256,43.5z M378.81,222.92L249.88,351.86c-7.95,7.95-18.52,12.33-29.76,12.33s-21.81-4.38-29.76-12.33l-57.17-57.17 c-8.3-8.3-12.87-19.35-12.87-31.11s4.57-22.81,12.87-31.11c8.31-8.31,19.36-12.89,31.11-12.89s22.8,4.58,31.11,12.89l24.71,24.7 l96.47-96.47c8.31-8.31,19.36-12.89,31.11-12.89c11.75,0,22.8,4.58,31.11,12.89c8.3,8.3,12.87,19.35,12.87,31.11 S387.11,214.62,378.81,222.92z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    CTD in Approval
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link d-flex gap-1" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-top-rejected" aria-controls="navs-pills-top-rejected"
                    aria-selected="false">
                    <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="auto">
                        <title>close_circle_fill</title>
                        <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="System" transform="translate(-240.000000, -48.000000)" fill-rule="nonzero">
                                <g id="close_circle_fill" transform="translate(240.000000, 48.000000)">
                                    <path
                                        d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                                        id="MingCute" fill-rule="nonzero">

                                    </path>
                                    <path
                                        d="M12,2 C17.5228,2 22,6.47715 22,12 C22,17.5228 17.5228,22 12,22 C6.47715,22 2,17.5228 2,12 C2,6.47715 6.47715,2 12,2 Z M9.87874,8.46443 C9.48821,8.07391 8.85505,8.07391 8.46452,8.46443 C8.10404,8.82491923 8.07631077,9.39214645 8.38133231,9.78443366 L8.46452,9.87864 L10.5858,11.9999 L8.46443,14.1213 C8.07391,14.5118 8.07391,15.145 8.46443,15.5355 C8.82491923,15.8959615 9.39214645,15.9236893 9.78443366,15.6186834 L9.87864,15.5355 L12,13.4141 L14.1214,15.5355 C14.5119,15.926 15.1451,15.926 15.5356,15.5355 C15.8960615,15.1750385 15.9237893,14.6077793 15.6187834,14.2155027 L15.5356,14.1213 L13.4142,11.9999 L15.5355,9.87862 C15.926,9.4881 15.926,8.85493 15.5355,8.46441 C15.1750385,8.10392077 14.6077793,8.07619083 14.2155027,8.38122018 L14.1213,8.46441 L12,10.5857 L9.87874,8.46443 Z"
                                        id="形状" fill="#ff0000">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    Rejected CTD
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                <h6>Paid to Postulate CTD list.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableCTDlist table table-striped table-hover dt-responsive" id="dataTableCTDlist">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-success">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Disable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-danger">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Enable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                <h6>Paid to Consult CTD list.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableCTDconsult table table-striped table-hover dt-responsive"
                        id="dataTableCTDconsult">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-success">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userConsultLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Disable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-danger">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userConsultLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Enable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                <h6>Cart list.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableCartlist table table-striped table-hover dt-responsive" id="dataTableCartlist">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-success">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userCartCTDs"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Disable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-danger">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userCartCTDs"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Enable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-wishlist" role="tabpanel">
                <h6>Wishlist.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableWishlist table table-striped table-hover dt-responsive" id="dataTableWishlist">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-success">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userWishlistCTDs"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Disable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-danger">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userWishlistCTDs"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        110000
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Enable
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-approval" role="tabpanel">
                <h6>CTD in Approval.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableCTDapproval table table-striped table-hover dt-responsive"
                        id="dataTableCTDapproval">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-warning">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userCTDapproval"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        0
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Approve
                                            </a>
                                            <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#rejectCTD">
                                                Reject
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-warning">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userCTDapproval"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        0
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Approve
                                            </a>
                                            <a href="javascript:;" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#rejectCTD">
                                                Reject
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-rejected" role="tabpanel">
                <h6>Paid to Consult CTD list.</h6>
                <div class="table-responsive mb-3">
                    <div class="filterable">
                        <div class="dropFilter packages d-flex flex-wrap pb-2 mb-3 mt-0 border-bottom">
                            <div class="title-filter">
                                <select name="userViewCountry" class="form-select userViewCountry">
                                    <option value="" selected="">Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLanguage" class="form-select userViewLanguage">
                                    <option value="" selected="">Select Language</option>
                                    <option value="French">French</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="">
                                <select name="userViewLots" id="userViewLots" class="form-select userViewLots">
                                    <option value="" selected="">Number of Lot's</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewFunding" id="userViewFunding" class="form-select userViewFunding">
                                    <option value="" selected="">Funding sources</option>
                                    <option value="ADB">ADB</option>
                                    <option value="World Bank">World Bank</option>
                                    <option value="IDB">IDB</option>
                                </select>
                            </div>
                            <div class="status">
                                <select name="userViewStatus" id="userViewStatus" class="form-select userViewStatus">
                                    <option value="" selected="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table class="dataTableCTDrejected table table-striped table-hover dt-responsive"
                        id="dataTableCTDrejected">
                        <caption class="sr-only"></caption>
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Rejecting reason</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot class="hidden">
                            <tr>
                                <th scope="col">CTD List</th>
                                <th scope="col">CTD Title</th>
                                <th scope="col">Number of lots</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration date</th>
                                <th scope="col">Rejecting reason</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-warning">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userRejectedLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        0
                                    </button>
                                </td>
                                <td>
                                    <span class="text-success">24/06/2023, 19:30PM</span>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#rejectRCTD"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </td>

                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Approve
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Delete
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-3"><img
                                                    src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>
                                                <a href="{{ route('ctd-preview') }}" class="text-warning">CTD ID</a>
                                            </small>
                                            <a href="" class="text-body text-truncate">
                                                <span class="fw-semibold">Type of CTD </span>
                                            </a>
                                            <span class="d-none">Bangladesh</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis explicabo
                                    distinctio modi ad accusantium sequi?
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary d-flex gap-2 px-2 py-1">
                                        <span class="badge bg-white text-primary p-1">4</span>Lot(s)
                                    </button>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#userConsultLots"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        0
                                    </button>
                                </td>
                                <td>
                                    <span class="text-danger">
                                        10/09/2022, 05:10AM
                                    </span>
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#rejectRCTD"
                                        class="btn btn-label-primary d-flex gap-2 px-2 py-1">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="d-inline-block">
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="javascript:;" class="item-edit text-body"><i
                                                class="bx bxs-trash"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="{{ route('ctd-preview') }}" class="dropdown-item">
                                                View
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Approve
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Delete
                                            </a>
                                            <a href="javascript:;" class="dropdown-item">
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item text-success delete-record">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Users List Table -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="addData" aria-labelledby="addDataLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add New CTD</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            @foreach ($countryData as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Select Country</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>Choose One</option>
                            <option value="Business">FDA</option>
                            <option value="Enterprise">World Bank - WB</option>
                        </select>
                        <label for="floatingSelect">Supervising Ministry</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="Service name here">
                            <label for="floatingInput">Service Name</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="CTDtype"
                                placeholder="Write Type of CTD">
                            <label for="CTDtype">Type of CTD</label>
                        </div>
                    </div>
                    <div class="floated-submit alert alert-info align-items-center">
                        <p>It seems this CTD doesn't existed would you like to add this CTD?</p>
                        <span id="Get" class="btn btn-info">Submit Name</span> <span class="nosearch"> <a
                                href="javascript:void(0)" id="search_exit_ctd">No,search
                                existing CTD's
                            </a></span>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="CTD Object here">
                            <label for="floatingInput">CTD Object</label>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="CTD ID here">
                        <label for="floatingInput">CTD ID</label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="CTDfunding"
                            placeholder="Write CTD Funding Source">
                        <label for="floatingInput">CTD Funding Source</label>
                    </div>
                    <div class="floated-submit2 alert alert-info align-items-center">
                        <p>It seems Funding Source doesn't existed would you like to add this?</p>
                        <span id="Get" class="btn btn-info">Submit Name</span> <span class="nosearch"> <a
                                href="javascript:void(0)" id="search_exit_ctd">No,search
                                existing Funding Source's
                            </a></span>
                    </div>
                </div>
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" name="CreateInput" id="CreateInput"
                            aria-label="Floating label select example" onchange="AddLotItem()">
                            <option value="" selected>Choose One</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label for="CreateInput">Number of Lot (s) </label>
                    </div>
                </div>
                <div id="lotsUser">
                    <div class="my-3 d-none">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Lot description here" id="floatingTextarea" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Lot 1</label>
                        </div>
                    </div>
                </div>
                <div id="prSwtch">
                </div>

                <div id="lotsPrice">
                </div>

                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="" selected>Choose One</option>
                            <option value="English">English</option>
                            <option value="French">French</option>
                        </select>
                        <label for="floatingSelect">Select Language</label>
                    </div>
                </div>
                <!-- Datetime Picker-->
                <div class="col-md-12 col-12 mb-4">
                    <label for="flatpickr-datetime" class="form-label">CTD Deadline</label>
                    <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM"
                        id="flatpickr-datetime" />
                </div>
                <!-- /Datetime Picker-->
                <div class="mb-3">
                    {{-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> --}}
                    <!-- Picker: --->
                    <input class="btn btn-success w-100" type="BUTTON" name="Pick watermark"
                        value="Choose your CTD file(s)" id="waterPicker" onclick="openPicker()">
                </div>
                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="rejectRCTD" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Rejecting Reason</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 18vh">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="rejectCTD" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Rejecting CTD</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Briefly explain the reasons of rejecting this CTD"
                                id="floatingTextarea" style="height: 18vh"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userLots" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Paid to Postulate</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1 <small>(15 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    825000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2 <small>(20 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    1100000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 border-bottom">
                        <div class="col-6">
                            <span class="fw-bold">Total:</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <span class="fw-bold pb-1 border-bottom">1925000 F CFA</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Invoice</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Buyers list</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userConsultLots" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Paid to Consult</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1</h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2</h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <div class="row border-bottom py-2">
                            <div class="col-md-6">
                                <span class="fw-bold">Unit Price:</span>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <span>55000 F CFA</span>
                            </div>
                        </div>
                        <div class="row border-bottom py-2">
                            <div class="col-md-6">
                                <span class="fw-bold">Total Amount <small>(123 Sold)</small>:</span>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <span>785000 F CFA</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Invoice</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Buyers list</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userCartCTDs" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Cart List</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1 <small>(15 Users)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    825000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2 <small>(20 Users)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    1100000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 border-bottom">
                        <div class="col-6">
                            <span class="fw-bold">Total:</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <span class="fw-bold pb-1 border-bottom">1925000 F CFA</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Invoice</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Users list</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userWishlistCTDs" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Wishist</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1 <small>(15 Users)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    825000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2 <small>(20 Users)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Total amount:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    1100000 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 border-bottom">
                        <div class="col-6">
                            <span class="fw-bold">Total:</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <span class="fw-bold pb-1 border-bottom">1925000 F CFA</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2"></div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Invoice</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="d-flex flex-column align-item-center justify-content-center">
                                <a href="#">
                                    <h6 class="mb-1">Users list</h6>
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userCTDapproval" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">In Approval</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1 <small>(0 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total Amount:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    0 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2 <small>(0 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total Amount:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    0 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            Total:
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <span class="border-bottom">
                                0 F CFA</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userRejectedLots" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between pb-2 border-bottom">
                    <div class="avatar avatar-xs">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="modal-title" id="modalScrollableTitle">Rejected CTD</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border-bottom">
                        <div class="col-md-2">
                            <a href="https://placeholder.com"><img src="https://dummyimage.com/30x20/fff/aaa"></a>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-center">CTD ID</h4>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="alert alert-secondary my-3" role="alert">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorem cumque
                            mollitia aliquid voluptatem deserunt perferendis sapiente. Nostrum.</span>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 1 <small>(0 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total Amount:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    0 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lot-info">
                        <h6 class="mb-1 mt-4">Lot 2 <small>(0 Sold)</small></h6>
                        <div class="border container-fluid" style="border-radius: .2rem">
                            <div class="row border-bottom py-2">
                                <div class="col-md-2">
                                    Title
                                </div>
                                <div class="col-md-10">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio
                                    consequuntur
                                    accusantium voluptatem explicabo voluptatum voluptas, blanditiis sunt atque
                                    earum
                                    illo, nesciunt vel modi quos laboriosam molestiae iure commodi et.
                                </div>
                            </div>
                            <div class="row border-bottom py-2">
                                <div class="col-md-6">
                                    <span class="fw-bold">Unit Price:</span>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <span>55000 F CFA</span>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    Total Amount:
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    0 F CFA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            Total:
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <span class="border-bottom">
                                0 F CFA</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap">
                            <i class="bx bx-send"></i>Send Mail
                        </span>
                    </button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
