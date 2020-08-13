<?php
$result = array();

for ($index = 2; $index <= 100; $index++) {
    $isprime = true;
    for ($subindex = 2; $subindex < $index; $subindex++) {
        if ($index % $subindex === 0) {
            $isprime = false;
            break;
        }
    }
    
    if(!!$isprime){
        array_push($result, $index);
    }
}

echo implode(', ', $result);
