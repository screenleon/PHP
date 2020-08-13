<form method="post">
    <label for="triangle">Please input three slides:</label>
    <br>
    <input type="text" name="slides">
    <button type="submit">Submit Triangle Slides</button>
</form>

<?php
if (isset($_POST['slides'])) {
    $slides = explode(' ', $_POST['slides']);
    sort($slides, SORT_NUMERIC);
    if ($slides[0] + $slides[1] > $slides[2]) {
        echo 'It is a valid triangle';
    } else {
        echo 'It isn\'t a valid triangle';
    }
}
