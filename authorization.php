<?php
session_start();

require "array.php";

$LOGIN = $_POST["login"];
$PASSWORD = $_POST["password"];
$SUBMIT = $_POST["submit"];

$counter = 0;

if(!empty($LOGIN)){
    for($i = 0; $i<count($arr); $i++){ 

        if(!($LOGIN == $arr[$i]["login"] and $PASSWORD == $arr[$i]["password"])) {
            continue;
        }
        
        $_SESSION["id"] = $arr[$i]["id"];
        $_SESSION["lang"] = $arr[$i]["lang"];
        
        header("Location: roles/".strtolower($arr[$i]["role"]).".php");
        $counter++;
    }   
    echo "Вы ввели неверные данные!";
}

require "index.php";
?>