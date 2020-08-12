<form method="post">
    <input type="text" name="number">
    <button type="submit">Submit Armstrong Number</button>
</form>

<?php if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (strlen($number) <= 3) {
        echo (int)$number === pow((int)$number[0], 3) + (int)$number[1] ** 3 + pow((int)$number[2], 3) ? 'true' : 'false';
    }
}
