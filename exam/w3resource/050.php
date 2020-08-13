<form method="post">
    <input type="number" name="months">
    <button type="submit">Submit Months</button>
</form>

<?php
$amount = 100000;
$load = 0.05;

if(isset($_POST['months'])) {
    for($index = 0; $index < (int)$_POST['months']; $index++){
        $amount += round($amount * $load, -3);
    }
    echo '<br>' . $amount;
}