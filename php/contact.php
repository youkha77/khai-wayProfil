<?php

$name = $email = $text = "";
$nameError = $emailError = $textError = "";
$isSuccess = false;
$emailTo = 'khaiway.la@gmail.com';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $text = verifyInput($_POST["text"]);
    $isSuccess = true;
    $emailText = "";

    if(empty($name)){
        $nameError = "Je souhaite connaitre ton prénom";
        $isSuccess = false;
    }
    else{
        $emailText .= "name: $name\n";
    }


    if(empty($text)){
        $textError = "un commentaire est obligatoire";
        $isSuccess = false;
    }
    else{
        $emailText .= "text: $text\n";
    }

    if(!isEmail($email)){
        $emailError = "ton email n'est pas valide";
        $isSuccess = false;
    }else{
        $emailText .= "email: $email\n";
    }

    if($isSuccess){
        $headers = "From: $name <$email>\r\nReplyTo: $email";
        mail($emailTo, "un message de votre site", $emailText, $headers);
        $name = $email = $text = "";
    }
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
