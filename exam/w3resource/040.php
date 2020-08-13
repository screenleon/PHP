<form method="post">
    <input type="number" name="firstnumber">
    <input type="number" name="secondnumber">
    <button type="submit">Submit Numbers</button>
</form>

<?php
if (isset($_POST['firstnumber']) && isset($_POST['secondnumber'])) {
    echo mod((int)$_POST['firstnumber'], (int)$_POST['secondnumber']);
}

function mod(int $number1, int $number2)
{
    if ($number2 > $number1) {
        list($number2, $number1) = array($number1, $number2);
    }

    return $number1 - floor($number1 / $number2) * $number2;
}
