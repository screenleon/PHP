<form method="post">
    <input type="number" name="number">
    <button type="submit">Submit Number</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $result = 0;
    for($index = 0; $index < strlen($number); $index++) {
        $result += (int)$number[$index];
    }
    echo $result;
}
