<body>
    <?php
    $filename = './unfamiliar.md';
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    ?>
    <p><?php echo $contents; ?></p>

    <p><?php echo file_get_contents($filename); ?></p>
</body>