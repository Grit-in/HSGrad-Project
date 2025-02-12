<?php
    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
    
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
   


if(invalidUid($name)!== false){
    header("location: ../signup.php?error=invalidUserId");
    exit();

}
if(invalidEmail($email)!== false){
    header("location: ../signup.php?error=invalidEmail");
    exit();

}
if(uidExists($conn,$name,$email)!== false){
    header("location: ../signup.php?error=usernameistaken");
    exit();

}

        createUser($conn,$name,$email,$pwd);
}
else{
    header("location: ../signup.php");
    exit();
}



