<form method="post">
    <input type="text" name="values">
    <button type="submit">Submit Values</button>
</form>

<?php
if (isset($_POST['values'])) {
    $values = explode(',', $_POST['values']);
    $variables = array();
    foreach( $values as $value) {
        $variable = explode(' = ', $value);
        $variables[$variable[0]] = $variable[1];
    }

    $result = 0;
    foreach ($variables as $key => $value) {
        $result += $value;
    }
    echo strlen(strval($result));
}