<?php
session_start();


session_destroy();
header("Location:/pokedex/index.php");
