<?php
function isUsername($username)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($pattern, $username, $matchs))
        return false;
    return true;
}

function isPassword($password)
{
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($pattern, $password, $matchs))
        return false;
    return true;
}
