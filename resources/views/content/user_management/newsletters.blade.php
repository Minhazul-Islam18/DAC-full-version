@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.1/css/select.dataTables.min.css" />
    <link type="text/css"
        href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
        rel="stylesheet" />
@endsection

@section('vendor-script')
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
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.1/js/dataTables.select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script type="text/javascript"
        src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    {{-- <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script> --}}
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <table id="newsletter" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th></th>
                        <th scope="col">Newsletter Subscribers</th>
                        <th scope="col">Subscription Date</th>
                        <th scope="col">Last mail sent</th>
                        <th scope="col">Account Owner</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th></th>
                        <th scope="col">Newsletter Subscribers</th>
                        <th scope="col">Subscription Date</th>
                        <th scope="col">Last mail sent</th>
                        <th scope="col">Account Owner</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-danger">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>30 Dec. 2022, 01:45 AM</span>
                        </td>
                        <td>
                            <span>12 Jan. 2023, 20:01 PM</span>
                        </td>
                        <td>
                            <span>No</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>30 Dec. 2022, 01:45 AM</span>
                        </td>
                        <td>
                            <span>12 Jan. 2023, 20:01 PM</span>
                        </td>
                        <td>
                            <span>Yes</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="addData" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Compose Mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea class="ckeditor form-control" name="description"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

    });

</script>
@endsection
