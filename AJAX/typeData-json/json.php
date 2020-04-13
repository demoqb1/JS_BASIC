<?php 

// Thiết lập font chữ UTF8 để khỏi bị lỗi font
header('Content-Type: text/html; charset=utf-8');

// Connect Database
$conn = mysqli_connect('localhost', 'root', '', 'e_market') or die ('Can not connect to mysql');
 
// Get List Member
$query = mysqli_query($conn, 'select * from category');
 
// Biến result
$result = array();
 
if (mysqli_num_rows($query) > 0)
{
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        $result[] = array(
            'name' => $row['name'],
            'status' => $row['status']
        );
    }
}
 
die (json_encode($result));

//TRONG PHP THÌ SẺ TRẢ VỀ 1 CHUỔI JSON  NHƯNG TRONG AJAX  KHAI BÀO DATATYPE LÀ JSON
//NÊN MẶC ĐỊNH KHI KQ TRẢ VỀ SẺ CHUYỂN CHUỔI JSON ĐÓ THÀNH OBJECT TRONG JS
//TA CẦN DÙNG VÒNG LẶP ĐỂ LẶP CÁC OBJECT ĐÓ CHUYỂN THÀNH MÃ HTML SAU ĐÓ HIỂN THỊ RA
?>