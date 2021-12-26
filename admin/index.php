<?php

require_once "../config/Config.php";
require_once "../helpers/Helper.php";
require_once "../helpers/Session.php";
require_once "../config/AdminPage.php";
require_once '../config/Database.php';
require_once "../config/Model.php";
require_once "../config/AdminController.php";

Session::start();

$adminPage = new AdminPage($_GET);