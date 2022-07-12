<?php
session_start();

if (isset($_POST['submit'])){ //if normal access
    session_destroy();
    header("Location: ../loginRegister.php?login=logout");
}
else{
    header("Location: ../Account.php?logout=error");
    exit();
}
