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


// function find_ari($arr)
// {
//     if ($arr->customer->name == 'Ari') {
//         return true;
//     }
// }

// function find_ari($arr)
// {
//     if ($arr->customer->name == 'Ari') {
//         return true;
//     }
// }

// $dataAri = array_filter($data, 'find_ari');
// function GetDataByName($data, $name)
// {
// 	$sum = 0;
// 	for ($i=0; $i < count($data) ; $i++) { 
// 		if (strtolower($data[$i]->customer->name) == strtolower($name))
// 		{
// 			$items = $data[$i]->items;
// 			foreach ($items as $item) 
// 			{
// 				$sum += $item->price * $item->qty;
// 			}
// 		}
// 	}
// 	return $sum;
// }




var_dump($data, 'find_all_purchases_in_february');
// var_dump(GetDataByName($data, "Ari"));
