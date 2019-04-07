<?php

include "./includes/header.php";
$FullName = $Email = $Mobile = $Birth = "";

$Err = [];

if (isset( $_POST["submit"] )) {
    if (strlen($_POST["FullName"])==0) {
        $Err["FullName_Err"] = "Missing input";
    }
    else {
        if (!preg_match("/^[a-zA-Z ]*$/",$FullName))    $Err["FullName_Err"] = "Missing input";
        else        $FullName = $_POST["FullName"];
    }

    if (empty($_POST["Email"])) {
        $Err["Email_Err"] = "Missing input";
    }
    else{
        $Email = $_POST["Email"];
    }

    if (empty($_POST["Mobile"])) {
        $Err["Mobile_Err"] = "Missing input";
    }
    else{
        $Mobile = $_POST["Mobile"];
    }

    if (empty($_POST["Birth"])){
        $Err["Birth_Err"] = "Missing input";
    }
    else    $Birth = $_POST["Birth"];

    if (count($Err) == 0)   include "./includes/signup.php";
    else                    include "./includes/form.php";
}
else{
    include "./includes/form.php";
}

include "./includes/footer.php";


