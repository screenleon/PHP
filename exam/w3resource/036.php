<form method="post">
    <label for="rawstring">Raw String: </label><input type="text" name="rawstring">
    <label for="lastsubstring">Last Substring</label><input type="text" name="lastsubstring">
    <button type="submit">Submit Raw String and Sub String</button>
</form>

<?php
if (isset($_POST['rawstring']) && isset($_POST['lastsubstring'])) {
    $strings = explode(' ', $_POST['rawstring']);
    if($strings[count($strings) - 1] === $_POST['lastsubstring']){
        echo 'The Last Substring is the last Raw String substring.';
    } else {
        echo 'There is not found the Last Substring';
    }
}