<a href="/">Index</a>
<br><br>
<form method="post">
    <input type="text" name="numberlist">
    <button type="submit">Submit Number List</button>
</form>

<?php
if (isset($_POST['numberlist'])) {
    $list = array();
    $numbers = explode(',', $_POST['numberlist']);
    foreach ($numbers as $number) {
        if (isset($list[$number])) {
            $list[$number]++;
        } else {
            $list[$number] = 1;
        }
    }

    ksort($list);
    $max = max($list);
    $result = array_filter($list, function ($var) {
        global $max;
        return $var === $max;
    });
    foreach ($result as $key => $value) {
        echo $key . '<br>';
    }
}
