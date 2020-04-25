<?php
session_start();

require "../check.php";

if (!isset($user)){
    exit(header("Location: /error404/"));
}
require "../change_lang.php";
?>

