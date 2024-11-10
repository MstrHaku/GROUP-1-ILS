<?php include('../Admin Page/layout/header.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4>
                        Add User
                        <a href="./Accounts.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>

                <!--CARD BODY-->
                <div class="card-body">

                    <?php alertMessage(); ?>

                    <form action="./adminphp/AddAccountCode.php" method="POST">
                        <div class="row">
                            <!--FULL NAME-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="fullName" class="form-control">
                                </div>
                            </div>

                            <!--EMAil-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>

                            <!--PHONE NUMBER-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Phone Number</label>
                                    <input type="text" name="phoneNumber" class="form-control">
                                </div>
                            </div>

                            <!--PASSWORD-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>
                    
                            <!--SELECT ROLE-->
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label>Select role</label>
                                    <select name="role" class="form-select">
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!--SUBMIT-->
                            <div class="col-md-6">
                                <div class="mb-3 text-end">
                                    <br/>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('../Admin Page/layout/footer.php') ?>