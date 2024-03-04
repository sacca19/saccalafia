<?php

use function PHPSTORM_META\exitPoint;

session_start();

session_destroy();
header('Location:index.php');
exit;

?>