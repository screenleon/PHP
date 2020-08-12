<form method="post">
    <input type="text" name="hex">
    <button type="submit">Submit Hex Number</button>
</form>

<?php
if (isset($_POST["hex"])) :
    $number = hexdec($_POST["hex"]);
    if ($number !== 0 || $_POST["hex"] === '0') :
        for ($index = 0; $index < 5; $index++) { ?>
            <p><?php echo dechex($number + $index); ?></p>
    <?php };
    endif; ?>
<?php endif; ?>