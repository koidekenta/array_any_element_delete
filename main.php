<?php

$arr = [0,3.0,1,"",2,null,true,"str","key" => "value","key2" => [0,1]];

function array_any_element_delete($delete_element, $arr){
  $new_arr = [];
  if(array_search($delete_element, $arr, true) !== false){
    $discover_key = array_search($delete_element, $arr, true);
    unset($arr[$discover_key]);
    foreach($arr as $key => $value){
      $new_arr[$key] = $value;
    }
    return $new_arr;
  }
  return false;
}

print_r(array_any_element_delete("str", $arr));

/*

Array
(
    [0] => 0
    [1] => 3
    [2] => 1
    [3] => 
    [4] => 2
    [5] => 
    [6] => 1
    [key] => value
    [key2] => Array
        (
            [0] => 0
            [1] => 1
        )


*/

?>
