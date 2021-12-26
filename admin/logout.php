<?php

require_once "../config/Config.php";
require_once "../helpers/Session.php";

Session::start();
Session::end();

header("Location: " . HOST . "admin");