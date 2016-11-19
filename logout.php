<?php
session_start();
unset($login_session);
session_destroy(); // Destroying All Sessions

header("Location: webAdminLogin.php"); // Redirecting To Home Page

?>