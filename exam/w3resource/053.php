<form method="post">
    <input type="text" name="coordinates">
    <button type="submit">Submit 3 Coordinates</button>
</form>

<?php
if (isset($_POST['coordinates'])) {
    $coordinates = explode(',', $_POST['coordinates']);
    $radius = calculateRadius(
        (int)$coordinates[0],
        (int)$coordinates[1],
        (int)$coordinates[2],
        (int)$coordinates[3],
        (int)$coordinates[4],
        (int)$coordinates[5]
    );
    echo 'Radius: ' . $radius . '<br>';
}

function calculateRadius($x1, $y1, $x2, $y2, $x3, $y3)
{
    $lineAB = ($y1 - $y2) / ($x1 - $x2);
    $lineBC = ($y3 - $y2) / ($x3 - $x2);
    $xcoordinate = getX($lineAB, $lineBC, $x1, $y1, $x2, $y2, $x3, $y3);
    $ycoordinate = getY($lineAB, $xcoordinate, $x1, $y1, $x2, $y2);

    echo 'Central coordinate(x, y): (' . $xcoordinate . ' ' . $ycoordinate . ')<br>';
    return sqrt(($x1 - $xcoordinate) ** 2 + ($y1 - $ycoordinate) ** 2);
}

function getX($lineAB, $lineBC, $x1, $y1, $x2, $y2, $x3, $y3)
{
    return ($lineAB * $lineBC * ($y3 - $y1) + $lineAB * ($x2 + $x3) - $lineBC * ($x1 + $x2)) / (2 * ($lineAB - $lineBC));
}

function getY($lineAB, $xcoordinate, $x1, $y1, $x2, $y2)
{
    return - (1 / $lineAB) * ($xcoordinate - ($x1 + $x2) / 2) + ($y1 + $y2) / 2;
}