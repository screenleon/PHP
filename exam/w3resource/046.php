<form method="post">
    <label for="heights">Building Height List: </label><input type="text" name="heights"><label for="heights"><span>(0 ~ 10000)</span>
        <br>
        <button type="submit">Submit Buildings Height List</button>
</form>
<br>
<?php
if (isset($_POST['heights'])) {
    $heightlist = explode(' ', $_POST['heights']);
    rsort($heightlist, SORT_NUMERIC);
    for ($index = 0; $index < 3; $index++) {
        echo $heightlist[$index] . "<br>";
    }
}
