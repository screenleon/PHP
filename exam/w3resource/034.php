<form method="post">
    <input type="text" name="value">
    <button type="submit">Submit Decimal Number</button>
</form>

<?php
if (isset($_POST["value"])) {
    $binary = (decbin((int)$_POST["value"]));
    $value = str_pad($binary, ceil(strlen($binary) / 4) * 4, '0', STR_PAD_LEFT);
    echo $value . '<br>';
    $a = rand(0, strlen($value) - 1);
    echo $a . ' ' . ($a + 1) . ': ' . ($value[$a] === $value[$a + 1] ? 'true' : 'false');
}
