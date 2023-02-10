<!-- Edit User Modal -->
<div class="modal fade" id="howto-po" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-features">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-left mb-4">
                    <h3>Add How To work - PO</h3>
                </div>
                <form id="editUserForm" class="row g-3" onsubmit="return false">
                    <div class="col-12 p-0">
                        <select name="lang" id="lang" class="form-select">
                            <optgroup>
                                <option value="" selected>Language</option>
                                <option value="en">English</option>
                                <option value="ar">Arabic</option>
                                <option value="fr">French</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-12 p-0 d-flex flex-column align-items-start">
                        <span>ICON *</span>
                        <button class="btn btn-secondary"
                            data-iconset="glyphicon|ionicon|fontawesome4|fontawesome5|weathericon|mapicon|octicon|typicon|elusiveicon|flagicon"
                            data-icon="fas fa-wifi" role="iconpicker" data-search="true" data-search-text="Search..."
                            data-placement="bottom"></button>
                        <span style="color:gray;">NB: Select the dropdown sign to select an icon</span>
                    </div>
                    <div class="col-12 p-0 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Title*</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="Enter title" />
                    </div>
                    <div class="col-12 p-0 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Short title*</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="Enter short-title" />
                    </div>
                    <div class="col-12 p-0 col-md-12">
                        <label class="form-label" for="modalEditUserName">Serial Number</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                            placeholder="3" />
                        <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the
                            feature will be shown.</span>
                    </div>
                    <div class="col-12 p-0 col-md-12 mt-4 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary" data-repeater-create="">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add</span>
                        </button>
                        <button class="btn btn-label-danger" data-repeater-delete="" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bx bx-x"></i>
                            <span class="align-middle">Cancel</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="howto-business" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-features">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Add How To work - Business</h3>
                </div>
                <form id="editUserForm" class="row g-3" onsubmit="return false">
                    <div class="col-12 p-0">
                        <select name="lang" id="lang" class="form-select">
                            <optgroup>
                                <option value="" selected>Language</option>
                                <option value="en">English</option>
                                <option value="ar">Arabic</option>
                                <option value="fr">French</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-12 d-flex flex-column align-items-start">
                        <span>ICON *</span>
                        <button class="btn btn-secondary"
                            data-iconset="glyphicon|ionicon|fontawesome4|fontawesome5|weathericon|mapicon|octicon|typicon|elusiveicon|flagicon"
                            data-icon="fas fa-wifi" role="iconpicker" data-search="true" data-search-text="Search..."
                            data-placement="bottom"></button>
                        <span style="color:gray;">NB: Select the dropdown sign to select an icon</span>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Title*</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="Enter title" />
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="modalEditUserFirstName">Short title*</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="Enter short-title" />
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="modalEditUserName">Serial Number</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                            placeholder="7" />
                        <span style="color: #e85903;font-weight: 600;">* The higher the serial number is, the later the
                            feature will be shown.</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary" data-repeater-create="">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add</span>
                        </button>
                        <button class="btn btn-label-danger" data-repeater-delete="" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bx bx-x"></i>
                            <span class="align-middle">Cancel</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
