<a href="/">Index</a>
<br><br>

<form method="post">
    <label for="circlearguments">Input (x1 y1) r1(radius), (x2, y2) r2(raduis)</label>
    <input type="text" name="circlearguments">
    <button type="submit">Submit Circle Arguments</button>
</form>

<?php
if (isset($_POST['circlearguments'])) {
    $arguments = explode(',', $_POST['circlearguments']);
    $r1 = (int)$arguments[2];
    $r2 = (int)$arguments[5];
    $lineAB = sqrt(((int)$argument[3] - (int)$arguments[0]) ** 2 + ((int)$arguments[4] - (int)$arguments[1]) ** 2);
    
    if($lineAB + $r1 < $r2) {
        echo "C1 is in C2<br>";
    } else if ($lineAB + $r2 < $r1) {
        echo "C2 is in C1<br>";
    } else if ($lineAB <= $r1 + $r2) {
        echo "Circumference of C1  and C2  intersect.<br>";
    } else {
        echo "C1 and C2 do not overlap.";
    }
}