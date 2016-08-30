<?php

require_once '../yang-mysql-lib/yang-mysql-class.php'; //
require_once 'login.php';
require_once 'register.php';

session_start(); // start a session

unset($_SESSION['valid_user']);