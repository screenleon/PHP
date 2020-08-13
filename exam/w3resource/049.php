<form method="post">
    <label for="values">ax + by = c<br>dx + ey = c<br>Please input each a,b,c,d,e,f variable</label>
    <br>
    <input type="text" name="values">
    <button type="submit">Submit Values for Variable</button>
</form>

<?php
if (isset($_POST['values'])) {
    $values = explode(',', $_POST['values']);
    $x = ((float)$values[2] / (float)$values[1] - (float)$values[5] / (float)$values[4]) / ((float)$values[0] / (float)$values[1] - (float)$values[3] / (float)$values[4]);
    $y = ((float)$values[2] - $values[0] * $x) / (float)$values[1];
    echo 'Values of x and y:<br>x: ' . $x . ', y: ' . $y;
}
