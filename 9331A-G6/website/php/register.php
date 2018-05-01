<?php

if(isset($_POST['submit'])){

    include_once'dbconn.php';


    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $userName = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['emailadd']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $bday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pass']);
    $repwd = mysqli_real_escape_string($conn, $_POST['repass']);

    if(empty($firstName) || empty($lastName) || empty($email)  || empty($userName) || empty($gender) ||
    empty($bday) || empty($pwd) || empty($repwd)){
        header("Location: ../webpages/register.html?signup=empty");
        exit();
    }   else{
        //check if input characters are valid
        if(!preg_match("/^[a-zA-z]*$/",$firstName)|| !preg_match("/^[a-zA-z]*$/",$lastName)){
            header("Location: ../webpages/register.html?signup=invalid");
            exit();
        }else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../webpages/register.html?signup=email");
                exit();
            }else{
                $sql = "SELECT * FROM users WHERE uname='$userName'";
                $result = mysqli_query($conn, $sql);
                $resultCheck= mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../webpages/register.html?signup=usertaken");
                    exit();
                }else{
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $hashedRepwd = password_hash($repwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql ="INSERT INTO users (fname, lname, uname, emailadd, gender, birthday, pass, repass) 
                        VALUES ('$firstName', '$lastName','$userName','$email','$gender','$bday','$hashedPwd','$hashedRepwd');";
                    $result = mysqli_query($conn, $sql);
                    header("Location: ../index.html?signup=success");
                    exit();
                }
            }
        }
    }

}else {
    header("Location: ../index.html");
    exit();
}