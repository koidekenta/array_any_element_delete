<?php

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

?>
