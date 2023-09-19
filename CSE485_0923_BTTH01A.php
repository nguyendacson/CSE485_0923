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
   ;

?>
<!-- Ý 6 -->
