<div class="container">
    <div class="modal fade" id="userModal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add / Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addForm" action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <label>Name:</label>
                        <div class="input-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-dark"> <i class="fas fa-user-alt text-light"></i>
                                </span>
                                <input id="userName" name="userName" type="text" class="form-control"
                                    placeholder="Enter your username" autocomplete="off" required="required">
                            </div>

                        </div>

                        <label>Email:</label>
                        <div class="input-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-dark"> <i class="fas fa-envelope text-light"></i>
                                </span>
                                <input id="email" name="userEmail" type="email" class="form-control"
                                    placeholder="Enter your email" autocomplete="off" required="required">
                            </div>

                        </div>

                        <label>Mobile:</label>
                        <div class="input-group mb-3">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-dark"> <i class="fas fa-phone text-light"></i> </span>
                                <input id="phone" name="userPhone" type="text" class="form-control"
                                    placeholder="Enter your phone" autocomplete="off" required="required" maxlength="10"
                                    minlength="10">
                            </div>

                        </div>

                        <div class="form-group">

                            <label>Photo:</label>
                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <label for="userPhoto" class="input-group-text">Choose Photo</label>
                                    <input id="photo" name="userPhoto" type="file" class="form-control" id="userPhoto">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btnSubmitNewUser" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        <!-- Updating & Deleting -->
                        <input type="hidden" name="action" value="addUser">
                        <input type="hidden" name="userId" id="userId" value="">

                    </div>
                </form>
            </div>
        </div>
    </div>




</div>
<!-- Modal Ends -->