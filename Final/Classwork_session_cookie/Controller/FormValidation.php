<?php

session_start();


$name="";
$email="";
$gender="";
$remember=false;

if(isset($_COOKIE["remember_me"])){

    $name = $_COOKIE["remember_me"];
    $remember = true;



}

$valid=true;

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=trim($_POST["name"] ?? "");
        $email=trim($_POST["email"] ?? "");
        $gender=trim($_POST["gender"] ?? "");
        $remember=isset($_POST["remember"]) && $_POST["remember"]==="1";
        if(!empty($name) && strlen($name)>=5)
            {
                echo "User Name: ".$name;
                echo "<br>";
            }
            else{
                echo "Name Must be at least 5 Charectar";
                $valid=false;
            }
        if(!empty($email))
            {
                echo "email: ".$email;
                echo "<br>";
            }
            else{
               echo "Email Must be required";
               $valid=false;
            }
        if(!empty($gender))
            {
                echo "Gender: ".$gender;
                echo "<br>";
            }
            else{
               echo "Select the gender";
               $valid=false;
            }
        if($valid){

        $_SESSION["logged_in"]=true;
        $_SESSION["username"]=$name;
        $message="Session created";
        if($remember)
            {
            setcookie("remember_me",$name,time()+86400*30,"/");

            }
        else{
            setcookie("remember_me","",time()-3600,"/");

        }

        }
        
    }




?>