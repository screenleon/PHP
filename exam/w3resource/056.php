<a href="/">Index</a>
<br><br>
<form method="post">
    <input type="text" name="coordinates">
    <button type="submit">Submit 4 Coordinates</button>
</form>

<?php
if (isset($_POST['coordinates'])) {
    $coordinates = explode(',', $_POST['coordinates']);
    $linePQ = ((int)$coordinates[2] - (int)$coordinates[0]) / ((int)$coordinates[3] - (int)$coordinates[1]);
    $lineRS = ((int)$coordinates[6] - (int)$coordinates[4]) / ((int)$coordinates[7] - (int)$coordinates[5]);
    
    if ($linePQ === $lineRS) {
        echo 'PQ and RS are parallel.';
    } else {
        echo 'PQ and RS are not parallel.';
    }
}
