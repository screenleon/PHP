<form method="post">
    <input type="number" name="number">
    <button type="submit">Submit Number</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    $lastprime = 0;
    for ($index = floor($number / 2); $index < $number; $index++) {
        $isprime = true;
        for ($subindex = 2; $subindex < $index; $subindex++) {
            if ($index % $subindex === 0) {
                $isprime = false;
                break;
            }
        }
        if($isprime) {
            $lastprime = $index;
        }
    }
    echo $lastprime;
}
