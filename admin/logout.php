<?php


session_start();

session_destroy();

session_start();

$_SESSION['msg'] = 'Déconnecté avec succès!';

header('location: index.php');