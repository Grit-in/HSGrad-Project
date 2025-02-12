<?php

        if(isset($_POST["submit"])){
                $name = $_POST["uid"];
                $pwd = $_POST["pwd"];

                require_once 'dbh.inc.php';
                require_once 'functions.inc.php';




                if(emptyInputLogin($name,$pwd) !== false){
                    header("location: ../signup.php?error=emptyinput");
                    exit();
                
                }
                loginUser($conn, $name,$pwd);

        }
        else{
            header("location: ../signup.php?error=emptyinput");
            exit();

        }
        