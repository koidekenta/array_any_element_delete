<?php

function array_any_element_delete($delete_element,$arr,$option = false){
$new_arr = [];
$count = 0;

$discover_indexes = array_keys($arr,$delete_element);
if(count($discover_indexes) !== 0){
  foreach($discover_indexes as $value){
    unset($arr[$value]);
    if($option === true){
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

$arr = [0,3.0,1,"",2,null,true,"str"];

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


*/

?>
