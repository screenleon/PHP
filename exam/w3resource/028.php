<?php 
$temp_file = tempnam(sys_get_temp_dir(), 'Rand');
echo $temp_file."\n";
unlink($temp_file);