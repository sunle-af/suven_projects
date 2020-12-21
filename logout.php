<?php
session_start();
session_destroy();
 
header('location: ../social_network/index.php');
exit;
 
 ?>