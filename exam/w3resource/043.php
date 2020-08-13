<form method="post">
    <input type="text" name="numberlist1">
    <input type="text" name="numberlist2">
    <button type="submit">Submit Numbers</button>
</form>

<?php
if(isset($_POST['numberlist1']) && isset($_POST['numberlist2'])) {
    $numberlist1 = explode(' ', $_POST['numberlist1']);
    $numberlist2 = explode(' ', $_POST['numberlist2']);

    if(count($numberlist1) > count($numberlist2)){
        list($numberlist2, $numberlist1) = array($numberlist1, $numberlist2);
    }

    $result = array();
    for($index = 0; $index < count($numberlist1); $index++) {
        array_push($result, ((int)$numberlist1[$index]) * ((int)$numberlist2[$index]));
    }

    echo implode(' ', $result);
}