<form method="post">
    <input type="text" name="string">
    <button type="submit">Submit String</button>
</form>

<?php
if (isset($_POST['string'])) {
    for ($index = 0; $index < strlen($_POST['string']); $index++) {
        if ($index === strrpos($_POST['string'], $_POST['string'][$index])) {
            echo $_POST['string'][$index];
            break;
        }
    }
}
