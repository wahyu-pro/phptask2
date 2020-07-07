<?php
// open file json
$read_file = file_get_contents("purchases.json");
$data = json_decode($read_file);

function find_all_purchases_in_february($data)
{
        if (date("F", strtotime($data->created_at)) == 'February') {
            return true;
        }
}

function find_ari($arr)
{
    if ($arr->customer->name == 'Ari') {
        return true;
    }
}
$dataAri = array_filter($data, 'find_ari');

function grandTotal($data)
{
	$sum = 0;
	$items = $data->items;
	foreach ($items as $item)
	{
		$sum += $item->price * $item->qty;
	}
	return $sum;
}

function grand_total_lower_than_300000($data)
{
	$sum = 0;
	$items = $data->items;
	foreach ($items as $item)
	{
		$sum += $item->price * $item->qty;
	}
	if ($sum < 300000){
			return $result[] = $data->customer->name;
		}
}


var_dump($data, 'find_all_purchases_in_february');

$result = array_map('grandTotal', $dataAri);
echo $result[4];

var_dump(array_map('grand_total_lower_than_300000', $data));