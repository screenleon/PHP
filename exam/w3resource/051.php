<form method="post">
    <label for="value">Input Integer (0 ~ 36)</label>
    <input type="number" name="value">
    <button type="submit">Submit Number</button>
</form>

<?php
if (isset($_POST['value'])) {
    $count = 0;
    $value = $_POST['value'];
    for ($x = 0; $x < 10; $x++) {
        for ($y = 0; $y < 10; $y++) {
            for ($z = 0; $z < 10; $z++) {
                for ($d = 0; $d < 10; $d++) {
                    if ($x + $y + $z + $d === (int)$value) {
                        $count++;
                    }
                }
            }
        }
    }

    echo $count;
}
