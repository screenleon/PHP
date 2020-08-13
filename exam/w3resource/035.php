<form method="post">
    <input type="text" name="numberlist">
    <button type="submit">Submit Number List</button>
</form>

<?php
if (isset($_POST["numberlist"])) {
    $result = array();
    foreach (explode(',', $_POST["numberlist"]) as $number) {
        if(!in_array($number, $result)) {
            array_push($result, $number);
        }
    }
    echo '(' . implode(',', $result) . ')';
    
}
