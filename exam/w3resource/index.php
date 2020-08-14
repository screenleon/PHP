<?php
$fileList = glob('*.php');
foreach ($fileList as $key => $filename) : ?>
    <?php if ($filename !== 'index.php') : ?>
        <a href="<?php echo $filename ?>"><?php echo $filename ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php endif; 
        if(($key + 1) % 5 === 0){
            echo "<br>";
        }
    ?>

<?php endforeach; ?>