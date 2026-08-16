<?php

session_start();


$name="";
$email="";
$gender="";
$remember=false;

if(isset($_COOKIE["remember_me"])){

    $name = $_COOKIE["remember_me"];
    $email = $_COOKIE["remember_email"];
    $gender = $_COOKIE["remember_gender"];
    
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
        $_SESSION["email"]=$email;
        $_SESSION["gender"]=$gender;
        $message="Session created";


        if($remember)
            {
            setcookie("remember_me",$name,time()+86400*30,"/");
             

            }
             if($remember)
            {
           
             setcookie("remember_email",$email,time()+86400*30,"/");
              
            }
             if($remember)
            {
              setcookie("remember_gender",$gender,time()+86400*30,"/");

            }

        else{
            setcookie("remember_me","",time()-3600,"/");

            }

                $jsonfile="../Model/user.json";
                 $users=[];
                if(file_exists($jsonfile)){
                    $jsonData=file_get_contents($jsonfile);
                    $users=json_decode($jsonData,true)??[];
                    $users []=[
                            'username'=>$name,
                            'email'=>$email,
                            'gender'=>$gender,
                            'timestamp'=> time()
                         ];
            file_put_contents($jsonfile,json_encode($users, JSON_PRETTY_PRINT));



                }

        }


    }

?>