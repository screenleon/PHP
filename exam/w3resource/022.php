<?php
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;