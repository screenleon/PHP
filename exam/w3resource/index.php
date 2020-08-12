<?php
$fileList = glob('*.php');
foreach ($fileList as $filename) : ?>
    <?php if ($filename !== 'index.php') : ?>
        <a href="<?php echo $filename ?>"><?php echo $filename ?></a><br>
    <?php endif; ?>
<?php endforeach; ?>