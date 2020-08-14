<a href="/">Index</a>
<br><br>
<form method="post">
    <label for="month">Input Month:</label><br>
    <input type="number" name="month"><br>
    <label for="day">Input Day:</label><br>
    <input type="number" name="day">
    <button type="submit">Submit Date</button>
</form>

<?php
if (isset($_POST['month']) && isset($_POST['day'])) {
    echo date("l", mktime(0, 0, 0, (int)$_POST['month'], (int)$_POST['day'], 2016));
}
