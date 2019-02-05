<?php

function array_any_element_delete($delete_element,$arr,$option = false){
$new_arr = [];
$count = 0;

$discover_indexes = array_keys($arr,$delete_element);
if(count($discover_indexes) !== 0){
  foreach($discover_indexes as $value){
    unset($arr[$value]);
    if($option !== true){
      break;
    }
  }
  
  foreach($arr as $key => $value){
    if(is_string($key)){
      $new_arr[$key] = $value;
    }else{
      $new_arr[$count] = $value;
      $count++;
    }
  }
  return $new_arr;
}
return false;
}

$arr = ["str",5,2.5,3.0,"str3",true,false,"str",null,"","key2" => "value","key" => "value","banana","apple","str"];

print_r(array_any_element_delete("str", $arr));

/*

Array
(
    [0] => 5
    [1] => 2.5
    [2] => 3
    [3] => str3
    [4] => 1
    [5] => 
    [6] => str
    [7] => 
    [8] => 
    [key2] => value
    [key] => value
    [9] => banana
    [10] => apple
    [11] => str
)

*/

print_r(array_any_element_delete("str", $arr, true));

/*

Array
(
    [0] => 5
    [1] => 2.5
    [2] => 3
    [3] => str3
    [4] => 
    [5] => 
    [6] => 
    [key2] => value
    [key] => value
    [7] => banana
    [8] => apple
)

*/
?>
