<?php 
include('../libs/db.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
	$password = md5($_POST['password']);

    ## validate requests
    if (isset($email) && !empty($email) && isset($password) && !empty($password)) {

        ## user and password check
        $loginResult = $conn->query("SELECT id, full_name FROM users WHERE email = '{$email}' AND password = '{$password}'");

        ## check user found or not
        if($loginResult->num_rows > 0) {

            ## fetch user data
            $userData = $loginResult->fetch_array();

            ## set session value
            $_SESSION['id'] = $userData['id'];
            $_SESSION['full_name'] = $userData['full_name'];

            ## redirect to dashboard
            header('Location: ../index.php');
        } else {
            $_SESSION['error'] = "Email or Password Not Matched";

            ## redirect to login 
            header('Location: ../login.php');
        }
    }
}
?>