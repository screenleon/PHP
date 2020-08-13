<form method="post">
    <input type="text" name="numberlist">
    <input type="number" name="sumnumber">
    <button type="submit">Submit Number List and Pair Sum</button>
</form>

<?php
if (isset($_POST['numberlist']) && isset($_POST['sumnumber'])) {
    $sum = (int)$_POST['sumnumber'];
    $numberlist = explode(',', $_POST['numberlist']);
    $result = array();

    sort($numberlist, SORT_NUMERIC);
    for ($index = 0; $index < count($numberlist) - 1; $index++) {
        if ($sum - (int)$numberlist[$index] > 0) {
            for ($subindex = $index + 1; $subindex < count($numberlist); $subindex++) {
                if ($subindex === $index) continue;
                if ((int)$numberlist[$index] + (int)$numberlist[$subindex] === $sum) {
                    $result[$index] = $subindex;
                } else if ((int)$numberlist[$index] + (int)$numberlist[$subindex] > $sum) {
                    break;
                }
            }
        }
    }

    foreach($result as $key => $value){
        echo $key . ',' . $value . ';';
    }
}
