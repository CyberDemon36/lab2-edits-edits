<?php

if($_POST["selector"]){

    // $_POST["selector"] = false;
    $newLang = $_POST["lang"];
    $user = changeLang($user, $newLang);
}
if($_POST["exit"]){ 

    session_destroy();
    header("Location: ../authorization.php");
}
$user->introduce();
?>

<html>
<body>
    <form method="POST">
    <select name="lang" >
        <option value="ru">Русский</option>
        <option value="ua">Українська</option>
        <option value="en">English</option>
        <option value="it">Italiano</option>
    </select>
        <input type="submit" name = "selector" value="Select">
    </form>
    <form method="POST">
    <input type="submit" name="exit" value="Выйти">
    </form>
</body>
</html>  