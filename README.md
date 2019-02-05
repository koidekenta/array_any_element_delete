# array_any_element_delete
配列内にある値を削除して新たな配列を作成して返す関数<br />
**※配列のkey, valueのvalue部分が配列や連想配列の場合には未対応**<br />
<br />

**第1引数:** 削除したい値<br />
**第2引数:** 削除したい値の入っている配列<br />
**第3引数:** trueを入れると指定した値すべて、指定しなければ、最初の値だけを削除する<br />
<br />

    <?php
    
    $arr = [5,"str",0.9];
    $new_arr = array_any_element_delete("str",$arr); # [5, 0.9]
    
    ?>

空文字、null、falseは何も入らない、trueは1に、3.0など、整数の値の後に、.0のように続くパターンのfloat型は、3に変換されます。<br />

