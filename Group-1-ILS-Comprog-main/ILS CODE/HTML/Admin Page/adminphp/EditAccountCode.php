<?php 

require ('./functions.php');

/*SAVE BUTTON*/
if (isset($_POST['save'])) {
    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $email = validate($_POST['email']);
    $phoneNumber = validate($_POST['phoneNumber']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);   
    $ban = validate($_POST['ban']) == true ? 1:0;

    $userId = validate($_POST['userId']);
    $user = getById('adduser', $userId);
    if ($user['status'] != 200) {
        redirect('../EditAccounts.php?id='.$userId, 'No id found');
    }

    if ($firstName != '' && $lastName != '' && $email != '' && $phoneNumber != '' && $password != ''){
        $query = "UPDATE adduser SET 
                firstName = '$firstName',
                lastName = '$lastName',
                email = '$email', 
                phoneNumber = '$phoneNumber', 
                password = '$password', 
                role = '$role', 
                ban = '$ban' 
                WHERE id = '$userId'";

        $result = mysqli_query($conn, $query);
        if ($result){
            redirect('../Accounts.php', 'Account Edited Succesfully');
        } else {
            redirect('../AddAccounts.php', 'Something went wrong :(');
        }
    } else {
        redirect('../AddAccounts.php', 'Please fill all the input fields');
    }
}

?>