<?php
namespace coiffuresenegal\Controllers;
require_once("../autoload.php");


$index = new SuperAdminRootController();
echo $index->render();
?>
