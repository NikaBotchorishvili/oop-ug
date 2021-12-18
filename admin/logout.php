<?php

require_once "../helpers/Session.php";

Session::start();
Session::end();

header("Location: /oop-ug/admin");