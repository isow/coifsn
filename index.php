<?php
namespace coiffuresenegal\Controllers;
require_once("autoload.php");

$index = new RootController();
echo $index->render();
?>
