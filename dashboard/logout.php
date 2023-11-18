<?php
session_start();
session_unset();
session_destroy();

if(empty($_SESSION['username'])) {
    header('location:../view/index.php');
} else {
    echo "gagal destroy";
}
?>
