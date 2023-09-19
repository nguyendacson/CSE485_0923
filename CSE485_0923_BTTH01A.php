<?php
$arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];

$tong = 0;
$tich = 0;
$hieu = $arr[0];
$thuong = $arr[0]; 

for ($i = 0; $i < count($arr); $i++) {
    $tong += $arr[$i];
    $tich *= $arr[$i];
    $hieu -= $arr[$i];
    $thuong /= $arr[$i];
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ý 2</title>
    <style>
        .red
        {
            color: red;
        }

        .blue
        {
            color: blue;
        }

        .orange
        {
            color:orange;
        }

        .white
        {
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
        foreach ($arrs as $color) 
        {
            if ($color === 'đỏ') {
                echo "<span class='red'>$color</span><br>";
            } 
            else if ($color === 'xanh') 
            {
                echo "<span class='blue'>$color</span><br>";
            }
            else if ($color === 'cam')
            {
                echo "<span class='orange'>$color</span><br>";
            }
            else if ($color === 'trắng')
            {
                echo "<span class='white'>$color</span><br>";

                echo  " Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của Sơn, cam là màu yêu 
                thích của Thắng, còn màu yêu thích của tôi là màu trắng " ;
            }
        } 
    ?>
</body>
</html>

