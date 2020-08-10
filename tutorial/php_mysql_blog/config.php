<?php
session_set_cookie_params(['samesite' => 'lax', 'secure' => 'true']);
session_start();

$conn = mysqli_connect("Host", "username", "password", "dbname");
if(!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost:3000');