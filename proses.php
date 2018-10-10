<?php
$status = $_POST['status'];
$basea = $_POST['basea'];
$baseb = $_POST['baseb'];
$basec = $_POST['basec'];
$based = $_POST['based'];
$base = $_POST['base'];

session_start();
$_SESSION['basea'] = $basea;
$_SESSION['baseb'] = $baseb;
$_SESSION['basec'] = $basec;
$_SESSION['based'] = $based;

if ($status == 1) {
    if ($basea == 0) {
        $_SESSION['basea'] = 1;
    } elseif ($baseb == 0) {
        $_SESSION['baseb'] = 1;
    } elseif ($basec == 0) {
        $_SESSION['basec'] = 1;
    } elseif ($based == 0) {
        $_SESSION['based'] = 1;
    }
} elseif ($status == 0) {
    if ($base == "a") {
        $_SESSION['basea'] = 0;
    } elseif ($base == "b") {
        $_SESSION['baseb'] = 0;
    } elseif ($base == "c") {
        $_SESSION['basec'] = 0;
    } elseif ($base == "d") {
        $_SESSION['based'] = 0;
    }
}

header("Location: parkir.php");

?>
