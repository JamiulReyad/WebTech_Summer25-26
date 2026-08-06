<?php
$name="";
$email="";
$gender="";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=trim($_POST["name"] ?? "");
        $email=trim($_POST["email"] ?? "");
        $gender=trim($_POST["gender"] ?? "");
        if(!empty($name) && strlen($name)>=5)
            {
                echo "User Name: ".$name;
                echo "<br>";
            }
            else{
                echo "Name Must be at least 5 Charectar";
            }
        if(!empty($email))
            {
                echo "email: ".$email;
                echo "<br>";
            }
            else{
               echo "Email Must be required";
            }
        if(!empty($gender))
            {
                echo "Gender: ".$gender;
                echo "<br>";
            }
            else{
               echo "select the gender";
            }
    }




?>