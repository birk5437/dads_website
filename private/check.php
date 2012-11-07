<?php
$USERS["birk5437"] = "123qweasdzxc";
$USERS["tenoclock42"] = "123qweasdzxc";

function check_logged(){
     global $_SESSION, $USERS;
     if (!array_key_exists($_SESSION["logged"],$USERS)) {
          header("Location: login.php");
     };
};
?>
