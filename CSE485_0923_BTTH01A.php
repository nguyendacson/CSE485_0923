
<!-- Ý 1  -->
<?php
$arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];

$tong = 0;
$tich = 1;
$hieu = $arr[0];
$thuong = $arr[0]; 

for ($i = 0; $i < count($arr); $i++) {
    $tong += $arr[$i];
    $tich *= $arr[$i];
    if ($i != 0) 
    {
        $hieu -= $arr[$i];
        $thuong /= $arr[$i];
    }
}


$TinhTong = implode(' + ', $arr) . ' = ' . $tong;
$TinhTich = implode(' * ', $arr) . ' = ' . $tich;
$TinhHieu = implode(' - ', $arr) . ' = ' . $hieu;
$TinhThuong = implode(' / ', $arr) . ' = ' . $thuong;

echo 'Tổng các phần tử: ' . $TinhTong . '<br>'. '<br>';
echo 'Tích các phần tử: ' . $TinhTich . '<br>'. '<br>';
echo 'Hiệu các phần tử: ' . $TinhHieu . '<br>'. '<br>';
echo 'Thương các phần tử: ' . $TinhThuong .'<br>'. '<br>';

?>

<!-- Ý 2 -->


<!-- Ý 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng HTML trong PHP</title>
</head>
<body>
    <?php
    $data = [
        ['<strong>Tên khóa học </strong>'],
        ['PHP'],
        ['HTML'],
        ['CSS'],
        ['JS']
    ];

    echo '<table border="1">';
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>

<!--Ý 4 -->
<?php
$arrs = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris", 
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", 
    "Spain" => "Madrid", 
    "Sweden" => "Stockholm", 
    "United Kingdom" => "London", 
    "Cyprus" => "Nicosia", 
    "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", 
    "Estonia" => "Tallin", 
    "Hungary" => "Budapest", 
    "Latvia" => "Riga", 
    "Malta" => "Valetta", 
    "Austria" => "Vienna", 
    "Poland" => "Warsaw"
);
foreach ($arrs as $country => $capital) {
    echo "Thủ đô của $country là $capital <br>";}
?>

<!-- Ý 5 -->
<?php 
    echo '<br>';

    $a = 
    [
        'a' => ['b' => 0,'c' => 1],
        'b' => ['e' => 2,'o' => ['b' => 3]]
    ];

    $b3 = $a['b']['o']['b'];
    echo 'giá trị = 3 có key là b = ' .$b3 .'<br>';
    $a1 = $a['a']['c'];
    echo 'giá trị = 1 mà có key là c = ' . $a1 .'<br>';
 
    $ab = $a['a']['b'];
    $abc = $a['a']['c'];
    echo 'thông tin của phần tử có key là a là : ' . $ab . ' ' . $abc;
    echo '<br>';
    echo '<br>';
?>

<!-- Ý 6 -->
<?php 
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array_combine($keys, $values);

print_r($keysAndValues);

?>

<!-- Ý 7 -->
<?php
echo '<br>' . '<br>';
    $array3 = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    echo 'các số thỏa mãn điều kiện bài là: ' ;
    foreach ($array3 as $number) 
    {
        if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
            echo  $number . ' ';
        }
    }
?>
<!-- Ý 8 -->
<?php 

echo '<br>' . '<br>';
 $array4 = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $kitungannhat = '';
    $kitudainhat = '';
    $tongkitu = 0 ;

    foreach($array4 as $demstring)
    {
        $doDaistring = strlen($demstring);

        if($doDaistring > strlen($kitungannhat))
        {
            $kitudainhat = $doDaistring;
        }

        if($doDaistring < strlen($kitungannhat))
        {
            $kitungannhat = $doDaistring;
        }

        $tongkitu += $doDaistring;
    }

    echo "Chỗi lớn nhất là " . $kitungannhat . ", độ dài = " . strlen($kitudainhat) . '<br>' ;
    echo "Chuỗi bé nhất là " . $kitudainhat . ", độ dài = " . strlen($kitudainhat) . '<br>' ;
?>

<!-- Ý 9 -->

<?php 
    $arrs1 = ['1', 'B', 'C', 'E'];
    $arrs2 = ['a','0',Null,False];

    $arrs1 = array_map('strtolower',$arrs1);
    print_r($arrs1) ;

    echo  '<br>';

    $arrs2 = array_map(function ($kieuchu0)
    {
        if(is_string($kieuchu0))
        {
            return strtolower($kieuchu0);
        }
        else if ($kieuchu0 === Null)
        {
            return 'null';
        }
        else if ($kieuchu0 === False)
        {
            return 'false';
        }
        else
        {
            return $kieuchu0;
        }
    },$arrs2);

    print_r($arrs2);

    echo  '<br>';
?>

<!-- Ý 10  -->
<?php 
    $arrs3 = ['1','b','c','d'];
    $arrs4 = ['a',0,null,false];

    $arrs3 = array_map('strtoupper', $arrs3);
    print_r($arrs3);
echo '<br>';
    $arrs4 = array_map(function ($kieuchu) 
    {
    if(is_string($kieuchu))
    {
        return strtoupper($kieuchu);
    }
    else if ($kieuchu === null)
    {
        return 'Null';
    }
    else if ($kieuchu === false)
    {
        return 'Else';
    }
    else
    {
        return $kieuchu;
    }
    }, $arrs4 );

    print_r($arrs4);
    echo '<br>';
?>

<!-- Ý 11 -->
<?php
$array = array(1,2,3,4,5);

if(isset($array[3]))
{
    unset($array[3]);
}
print_r($array);
echo '<br>';
?>

<!-- Ý 12 -->
<?php

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565,
];

$firstptu = reset($numbers);
echo "phần tử đầu của mảng là: " . $firstptu ."<br>";
$endptu = end($numbers);
echo "phần tử cuối của mảng là: " .$endptu ."<br>";

$biennhonhat = PHP_INT_MAX;
$bienlonnhat = 0;
$bientong = 0;

foreach($numbers as $bienthu => $giatribien)
{
    if($giatribien < $biennhonhat)
    {
        $biennhonhat = $giatribien;
    }
    elseif($giatribien > $bienlonnhat)
    {
        $bienlonnhat = $giatribien;
    }

    $bientong += $giatribien;
}

echo "Biến lớn nhất là: " . $bienlonnhat . '<br>';
echo "Biến nhỏ nhất là: " . $biennhonhat . '<br>';
echo "Tổng các phần tử : " . $bientong . '<br>';


arsort($numbers);
echo "Mảng sắp xếp theo thứ tự giá trị giảm dần: " . '<br>';
print_r($numbers) ;


asort($numbers);
echo "Mảng sắp xếp theo thứ tự giá trị tăng dần: " . '<br>';
print_r($numbers);

krsort($numbers);
echo "Mảng sắp xếp theo thứ tự key giảm dần: " . '<br>';
print_r($numbers);

ksort($numbers);
echo "Mảng sắp xếp theo thứ tự key tăng dần: " . '<br>';
print_r($numbers);
?>

<!-- Ý 13 -->
<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    
    $total = array_sum($numbers);

    $cout = count($numbers);

    $average = $total/$cout;

    echo '<br>';
    echo "Trung bình: " . $average .'<br>';

    echo "Các số lớn hơn số trung bình là:";
    $sumTB = 0;
    foreach ($numbers as $ktra) {
        if ($ktra > $average){
             $sumTB = $ktra ;
        }
        echo $sumTB .";";
    }
?>

<!-- Ý 14 -->
<?php 
$arrayss1 = [
 [77, 87],
 [23, 45]
];
$arrayss2 = [
 'giá trị 1', 'giá trị 2'
];
$result = [];

for ($i = 0; $i < count($arrayss1); $i++) {
    $result[] = array_merge([$arrayss2[$i]], $arrayss1[$i]);
}

print_r($result);

?>



