<form method="post">
    <input type="text" name="number">
    <button type="submit">Submit Number Word String</button>
</form>

<?php if (isset($_POST['number'])) {
    preg_match_all('/(\b[a-z]+)/i', $_POST['number'], $numbers);
    $result = '';
    foreach ($numbers[0] as $number) {
        $number = strtolower($number);
        switch ($number) {
            case 'zero':
                $result = $result . '0';
                break;
            case 'one':
                $result = $result . '1';
                break;
            case 'two':
                $result = $result . '2';
                break;
            case 'three':
                $result = $result . '3';
                break;
            case 'four':
                $result = $result . '4';
                break;
            case 'five':
                $result = $result . '5';
                break;
            case 'six':
                $result = $result . '6';
                break;
            case 'seven':
                $result = $result . '7';
                break;
            case 'eight':
                $result = $result . '8';
                break;
            case 'nine':
                $result = $result . '9';
                break;
            default:
                break;
        }
    }
    echo $result;
}
