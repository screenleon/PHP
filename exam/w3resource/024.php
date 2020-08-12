<?php
$filename = preg_replace('/\//', '', $_SERVER['SCRIPT_NAME']);
echo $filename;