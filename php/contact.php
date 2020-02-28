<?php

$array = array("name" => "", "email" => "", "text" => "", "nameError" => "", "emailError"=> "", "textError"=> "", "isSuccess"=> false);

$emailTo = 'khaiway.la@gmail.com';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["name"] = verifyInput($_POST["name"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["text"] = verifyInput($_POST["text"]);
    $array["isSuccess"] = true;
    $emailText = "";

    if(empty($array["name"])){
        $array["nameError"] = "Je souhaite connaitre ton prénom";
        $array["isSuccess"] = false;
    }
    else{
        $emailText .= "name: {$array["name"]}\n";
    }


    if(empty($array["text"])){
        $array["textError"] = "un commentaire est obligatoire";
        $array["isSuccess"] = false;
    }
    else{
        $emailText .= "text: {$array["text"]}\n";
    }

    if(!isEmail($array["email"])){
        $array["emailError"] = "ton email n'est pas valide";
        $array["isSuccess"] = false;
    }else{
        $emailText .= "email: {$array["email"]}\n";
    }

    if($array["isSuccess"]){
        $headers = "From: {$array["name"]} <{$array["email"]}>\r\nReplyTo: {$array["email"]}";
        mail($emailTo, "un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);

}

function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

?>
