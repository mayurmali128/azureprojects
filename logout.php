<?php
session_start();
unset($_SESSION["full-name"]);

unset($_SESSION["nbed"]);
unset($_SESSION["nocbed"]);
unset($_SESSION["ncyn"]);

//unset($_SESSION["name"]);
header("Location:index.html");
?>