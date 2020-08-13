<form method="post">
    <input type="text" name="email">
    <button type="submit">Submit Email</button>
</form>

<?php
if (isset($_POST['email'])) {
    $result = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if(!$result) {
        echo 'Wrong email format';
    } else {
        echo 'Valid email format';
    }
}