<?php

$csv = array_map('str_getcsv', file('file.csv'));
array_walk($csv, function(&$a) use ($csv) {
        $a = array_combine(array_map('strtolower',$csv[0]), $a);
});
array_shift($csv);
uasort($csv, function($a, $b){
    return $a[' price'] - $b[' price'];
});

var_dump($csv);


?>