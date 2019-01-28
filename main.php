<?php

$arr = [0,1,2,3,"str","key" => "value","key2" => [0,1]];

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

print_r(array_any_element_delete("str",$arr));
  
?>
