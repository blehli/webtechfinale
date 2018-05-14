<?php
session_start();
$_SESSION['username'] = $_POST['uname']; 
if (isset($_POST['submit'])){
    include 'dbconn.php';
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    
    //error handlers
    //check if inputs are empty
    if(empty($username) || empty($password)){
        header("Location: ../index.html?login=empty");
        exit();
    }else {
        $sql ="SELECT * FROM users WHERE uname = '$username';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: ../index.html?login=error");
            exit();
        } else{
            if($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedPwdCheck = password_verify($password, $row['pass']);
                if($hashedPwdCheck == false){
                    header("Location: ../index.html?login=error");
                    exit();
                }elseif($hashedPwdCheck == true){
                    //login user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['fname'];
                    $_SESSION['u_last'] = $row['lname'];
                    $_SESSION['u_name'] = $row['uname'];
                    $_SESSION['u_email'] = $row['email'];
                     header("Location: Homepage.php?access=success");
                    exit();
                }

            }
        }

    }
} else {
    header("Location: ../index.html?submit=error");
    exit();
}

?>
