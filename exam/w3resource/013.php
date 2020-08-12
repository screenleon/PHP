<style>
    table,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<?php $employees = array("Mr. A" => 1000, "Mr. B" => 1200, "Mr. C" => 1300); ?>

<table>
    <tbody>
        <?php foreach ($employees as $employee => $salary) : ?>
            <tr>
                <?php echo '<td>Salary of ' . $employee . ' is</td>' . '<td>' . $salary . '$</td>'; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>