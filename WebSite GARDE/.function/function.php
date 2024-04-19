<?php
//declaration coockie
function setCookieValue($name, $value) {
    $expiration = time() + (30 * 24 * 60 * 60);
    setcookie($name, $value,$expiration,"/");
}
function getCookieValue($name) {
    if (isset($_COOKIE[$name])) {
        return $_COOKIE[$name];
    } else {
        return null;
    }
}
//coockie default value =fr
$_SESSION['lang']=getCookieValue('langue');