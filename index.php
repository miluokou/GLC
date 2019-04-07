<?php
$file = fopen('glc1.csv','r');
echo '<pre>';
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
    $goods_list[] = $data;
}
//print_r($goods_list);

/* foreach ($goods_list as $arr){
    if ($arr[0]!=""){
        echo $arr[0]."<br>";
    }
} */
//echo $goods_list[2][0];

fclose($file);