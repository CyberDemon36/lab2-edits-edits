<?php
session_start();

require "../check.php";

if (!($user->isAdmin())){
    exit(header("Location: /error404/"));
}
require "../change_lang.php";
?>