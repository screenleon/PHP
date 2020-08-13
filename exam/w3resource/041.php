<table>

<?php
for ($indexy = 1; $indexy <= 6; $indexy++) { ?>

    <tr>
    <?php for ($indexx = 1; $indexx <= 6; $indexx++) {
        $result = strlen(strval($indexx * $indexy)) === 1 ? '&nbsp' . strval($indexx * $indexy) : strval($indexx * $indexy); ?>
        <td><?php echo $result; ?></td>
    <?php } ?>
    </tr>

<?php } ?>

</table>