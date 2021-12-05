<?php 

require_once "config/Page.php";
require_once "config/Controller.php";
require_once "config/Database.php";

$page = new Page($_GET);

//  Model Should Be Loaded First Because It Is Initialized In Controllers And It's Going To Give Errors If It's
//  Done Otherwise.
$page->getModel();
$page->getController();

?>