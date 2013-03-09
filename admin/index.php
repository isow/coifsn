<?php
namespace coiffuresenegal\Controllers;
require_once("../autoload.php");

$index = new AdminRootController();
echo $index->render();
?>
