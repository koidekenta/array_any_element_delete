# php_array_any_element_delete
配列内にある値を削除して新たな配列を作成して返す関数<br />
**※配列のキーが数字である配列(普通の配列)限定の関数です**<br /><br />


**第1引数:** 削除したい値<br />
**第2引数:** 削除したい値の入っている配列<br />
<br />

    <?php
    $arr = [5,"str",0.9];
    $new_arr = php_array_any_element_delete("str",$arr);
    $new_arr # [5, 0.9]
    ?>

削除したい値が複数ある場合、先頭の値のみが削除されます。

空文字、null、falseは何も入らない、trueは1に、3.0など、整数の値の後に、.0のように続くパターンのfloat型は、3に変換されます。<br />

