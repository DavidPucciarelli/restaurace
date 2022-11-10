<?php

$jmeno = $prijmeni = $email = $heslo = $pohlavi = $age = $datum;

if($_SERVER["REQUEST_METHOD"] == "post")
{
    $jmeno = validate_name($_POST["name"]);
    $prijmeni = validate_surname($_POST["surname"]);
    $email = validate_email($_POST["email"]);
    $heslo = validate_password($_POST["heslo"]);
    $pohlavi = validate_sex($_POST["pohlavi"]);
    $age = validate_age($_POST["age"]);
}

function validate_name($data)
{
    $data = validate_input($data);
    if(!isset($data))
    {
        throw new Exception("Box for name is not filled correctly!");
    }
    return $data;
}

function validate_surname($data)
{
    $data = validate_input($data);
    if(!isset($data))
    {
        throw new Exception("Box for surname is not filled correctly!");
    }
    return $data;
}

function validate_email($data)
{
    $data = validate_input($data);
    if(!isset($data))
    {
        throw new Exception("Box for email is not filled correctly!");
    }
    if(!filter_var($data, FILTER_VALIDATE_EMAIL))
    {
        throw new Exception("Box for email is not filled correctly!");
    }
    return $data;
}

function validate_password($data)
{
    $data = validate_input($data);
    if($data === "" || $data === null)
    {
        throw new Exception("Password is empty!");
    }
    if(count(str_split($data)) < 8 || count(str_split($data)) > 30)
    {
        throw new Exception("Password is short. It must be >8 and <30!");
    }
    if(!preg_match("/[A-Z]/", $data))
    {
        throw new Exception("Password must include capital letters!");
    }
    if(!preg_match("~[0-9]+~", $data))
    {
        throw new Exception("Password must include numbers!");
    }
    return $data;

}

function validate_sex($data)
{
    $data = validate_input($data);
    if(!isset($data))
    {
        throw new Exception("Box for sex is not filled correctly!");
    }
    return $data;
}

function validate_age($data)
{
    $data = validate_input($data);
    if(!isset($data))
    {
        throw new Exception("Box for age is empty!");
    }
    if ($data < 18)
    {
        throw new Exception("Underage");
    }
    return $data;
}

function validate_input($data)
{
    $data = trim($data); // odstrani veskere mezery ze zacatku a konce retezce
    $data = stripslashes($data); // odstrani zpetna lomitka
    $data = htmlspecialchars($data); // dovoli scriptu probehnout i kdyz obsahuje specialni znaky
    return $data;
}

?>