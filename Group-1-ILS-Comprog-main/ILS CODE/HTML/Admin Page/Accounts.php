<?php include('../Admin Page/layout/header.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4>
                        User List

                        <?php if ($_SESSION['loggedInUserRole'] == 'admin') : ?>
                        <a href="./AddAccounts.php" class="btn btn-primary float-end">Add User</a>

                        <?php else : ?>
                        <a onclick="onclickPopUp('You do not have permission')" class="btn btn-primary float-end">Add User</a>

                        <?php endif ; ?>

                    </h4>
                </div>

                <!--CARD BODY-->
                <div class="card-body">

                    <?php alertMessage(); ?>

                    <table id="myTable" class="table table-striped">
                        
                        <!--TABLE HEAD-->
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Ban</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <!--TABLE DATA-->
                        <tbody>
                            <?php 
                            $users = tableCon('adduser');
                            if (mysqli_num_rows($users) > 0){

                                foreach($users as $usersData){
                                    ?>
                                    <tr>
                                        <td><?php echo $usersData['id']; ?></td>
                                        <td><?php echo $usersData['firstName']; ?></td>
                                        <td><?php echo $usersData['lastName']; ?></td>
                                        <td><?php echo $usersData['email']; ?></td>
                                        <td><?php echo $usersData['phoneNumber']; ?></td>
                                        <td><?php echo $usersData['password']; ?></td>
                                        <td><?php echo $usersData['role'] != 1 ?  $usersData['role'] : ''; ?></td>
                                        <td><?php echo $usersData['ban'] == 1 ? 'True' : 'False'; ?></td>
                                        <td>
                                            <?php if ($_SESSION['loggedInUserRole'] == 'admin') : ?>
                                            <a href="./Edit-Accounts.php?id=<?php echo $usersData['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="./DeleteAccount.php?id=<?php echo $usersData['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                                        
                                            <?php else : ?>
                                            <a class="btn btn-success btn-sm" onclick="onclickPopUp('You do not have permission')">Edit</a>
                                            <a class="btn btn-danger btn-sm" onclick="onclickPopUp('You do not have permission')">Delete</a>

                                            <?php endif; ?>

                                        </td> 
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">No Record Found</td>
                                </tr>
                                <?php
                            }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include('../Admin Page/layout/footer.php') ?>