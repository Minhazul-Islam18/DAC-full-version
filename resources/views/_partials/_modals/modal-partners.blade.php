<!-- Edit User Modal -->
<div class="modal fade" id="features" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-features">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-left mb-4">
                    <h3>Add Partners</h3>
                </div>
                <form id="editUserForm" class="row g-3" onsubmit="return false">
                    <div class="col-12">
                        <label class="mb-2" for="filepond"></label>
                        <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                            data-max-files="3" />
                        <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                            allowed.</span>
                    </div>
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
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Enter name">
                        <label for="floatingInput">Name *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Enter url">
                        <label for="floatingInput">URL *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Select Status</option>
                            <option value="0">Publish</option>
                            <option value="1">Unpublish</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Status *</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="6">
                        <label for="floatingInput">Serial number</label>
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
