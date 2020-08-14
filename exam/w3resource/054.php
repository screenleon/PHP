<a href="/">Index</a>
<br><br>
<form method="post">
    <input type="number" name="bigint1">
    <input type="number" name="bigint2">
    <button type="submit">Submit Numbers</button>
</form>

<?php
if (isset($_POST['bigint1']) and isset($_POST['bigint2'])) {
    if (strlen($_POST['bigint1']) > 80 || strlen($_POST['bigint2']) > 80) {
        echo 'overflow';
    } else {
        echo bigintAdd($_POST['bigint1'], $_POST['bigint2']);
    }
}

function bigintAdd($bigint1, $bigint2)
{
    if (strlen($bigint1) < strlen($bigint2)) {
        list($bigint2, $bigint1) = array($bigint1, $bigint2);
    }
    $carry = 0;
    $index = 0;
    for (; $index < strlen($bigint2) or !!$carry; $index++) {
        if (!($index < strlen($bigint1))) {
            return '1' . $bigint1;
        }

        if ($index < strlen($bigint2)) {
            $result = (int)$bigint1[strlen($bigint1) - $index - 1] + (int)$bigint2[strlen($bigint2) - $index - 1] + $carry;
        } else {
            $result = (int)$bigint1[strlen($bigint1) - $index - 1] + $carry;
        }
        
        $carry = 0;
        if ($result >= 10) {
            $carry = 1;
            $result -= 10;
        }
        $bigint1[strlen($bigint1) - $index - 1] = strval($result);
    }

    return $bigint1;
}
