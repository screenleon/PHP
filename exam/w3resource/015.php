<form method="post">
    <input type="text" name="filename">
    <button type="submit">Submit File </button>
</form>

<?php if (isset($_POST["filename"])): ?>
    <?php if (!!stat($_POST["filename"])) : ?>
        <p><?php echo 'Last modified ' . date('l, jS F, Y, h:ia', stat($_POST["filename"])["mtime"]); ?></p>
    <?php endif; ?>
<?php endif; ?>