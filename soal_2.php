<?php

function is_usernamel_valid($username)
{
    if(preg_match("/^([a-zA-Z][a-zA-Z0-9]{5,9}$)+/", $username)) 
    {
        echo "VALID";
    } else {
        echo "NOT VALID";
    }
}

function is_password_valid($password)
{
    if(preg_match("/^(?=.{8,}$)(?=.[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/", $password)) 
    {
        echo "VALID";
    } else {
        echo "NOT VALID";
    }
}

is_usernamel_valid('titin_parmaini');
    echo "\n";
is_usernamel_valid('titin_parmaini28');
    echo "\n";
is_password_valid('akulapaR1@#');
    echo "\n";
is_password_valid('akulapar');

?>