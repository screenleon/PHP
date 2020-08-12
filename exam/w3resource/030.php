<?php
echo date('Y-m-d h:i:sa', filemtime(__FILE__)) . "<br><br>";
echo date('Y-m-d h:i:sa', getlastmod());