<?php

//Creating a Cookie
$CookieName = "Zavala";
$CookieValue = "Destiny Game Character";
setCookie($CookieName, $CookieValue, time() + (86400 * 30) );

//Reading a Cookie
if (!isset($_COOKIE[$CookieName])) {
    echo "Cookie named '". $CookieName. "' is not set!";
} else {
    echo "Cookie '". $CookieName. "' is set!<br>";
    echo "Value is: ". $_COOKIE[$CookieName];
}