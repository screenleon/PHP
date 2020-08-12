<form method="post">
    <input type="text" name="delay">
    <button type="submit">Submit Delay Second</button>
</form>

<p><?php echo date('h:i:sa') ?></p>
<?php if (isset($_POST["delay"])) : ?>
    <?php sleep($_POST["delay"]); ?>
    <p><?php echo 'Sleep ' . $_POST["delay"] . ' second'; ?></p>
    <p><?php echo date('h:i:sa') ?></p>
<?php endif; ?>