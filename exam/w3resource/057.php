<a href="/">Index</a>
<br><br>

<form method="post">
    <input type="text" name="numbers">
    <button type="submit">Submit Numbers</button>
</form>

<?php
if (isset($_POST['numbers'])) {
    $numbers = explode(' ', $_POST['numbers']);
    $result = 0;
    foreach ($numbers as $number) {
        $result += (int)$number;
    }
    echo $result;
}