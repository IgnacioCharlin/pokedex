<?php
session_start();


$_SESSION["isLogin"] = '';
header("Location:/pokedex/index.php");
