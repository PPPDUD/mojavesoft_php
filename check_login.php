<?php
session_start();

if (!isset($_SESSION["valid"])) {
    header('Location: '. '/egglink/');
}

?>