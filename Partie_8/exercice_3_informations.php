<?php
// var_dump($_POST);


if(isset($_POST["login"]) && !empty($_POST["login"])
&& isset($_POST["password"]) && !empty($_POST["password"])) {

if (isset($_COOKIE["login"]) && !empty($_COOKIE["login"]))
var_dump("$_POST");

}

?>