<form method="post">
    <input type="text" name="filename">
    <button type="submit">Submit File Name</button>
</form>

<?php if (isset($_POST["filename"])) : ?>
    <?php if (file($_POST["filename"])) : ?>
        <p><?php echo count(file($_POST["filename"])) ?></p>
    <?php else: ?>
        <p><?php echo 'Unknown file name'; ?></p>
    <?php endif; ?>
<?php endif; ?>