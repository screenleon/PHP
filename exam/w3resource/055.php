<a href="/">Index</a>
<br><br>
<form method="post">
    <input type="text" name="numbers">
    <button type="submit">Submit Numbers</button>
</form>

<?php
if (isset($_POST['numbers'])) {
    $numbers = explode(',', $_POST['numbers']);
    rsort($numbers, SORT_NUMERIC);
    echo implode(', ', $numbers);
}