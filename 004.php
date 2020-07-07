<?php
// open file json
$read_file = file_get_contents("fruits.json");
$data = json_decode($read_file);

function display_with_category_fruits($data)
{
        if ($data->category == 'fruits') {
            return true;
        }

}
var_dump(array_filter($data, 'display_with_category_fruits'));

function display_with_price($data)
{
    if ($data->price >= 20 and $data->price <= 100) {
        return true;
    }
}

$dataPrice = array_filter($data, 'display_with_price');
$open_file = fopen("price.json", "a+");
$dataWrite = json_encode($dataPrice, JSON_PRETTY_PRINT);
fwrite($open_file, $dataWrite);

?>