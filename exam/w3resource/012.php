<form method="post">
    <input type="text" name="email">
    <button type="submit">Submit Email</button>
</form>
<?php
if(isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if($email){
        echo 'Valid email';
    }else {
        echo 'Wrong format';
    }
}