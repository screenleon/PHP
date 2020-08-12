<form method="post">
    <input type="text" name="number">
    <button type="submit">Submit Number</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = (int)(filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT));
    if (!!$number) {
        $result = $number > 30 ? 'Greater than 30' : ($number > 20 ? 'Greater than 30' : ($number > 10 ? 'Greater than 10' : 'Smaller than 10')); ?>
        <p><?php echo $result; ?></p>
<?php }
}
