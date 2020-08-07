<!DOCTYPE html>
<html>

<body>
    <?php
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    $color = "red";
    echo $color;
    $oldtxt = "Hello World!";
    $newtxt = str_replace("World", "Dolly", $oldtxt);
    echo $newtxt;

    define("GREETING", "Hello world!", true);
    echo GREETING;
    echo date('l');
    if ($myfile = fopen('test.txt', 'r') or die("Unable to open file!")) {
        while (!feof($myfile)) {
            echo fgetc($myfile);
        }
    };
    fclose($myfile);
    ?>

</body>

</html>