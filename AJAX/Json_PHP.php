<?php 

$json_string = 
'
    {
        "name" : "Nguyễn Văn Cường",
        "email" : "TheHalfHeart@gmail.com",
        "website" : "freetuts.net"
    }
';
 
// Dạng Mảng
echo "<pre>";
print_r(json_decode($json_string, true));
echo "</pre>";
// Dạng Object
echo "<pre>";
print_r(json_decode($json_string));
echo "</pre>";

 //chuyển 1 mảng thành 1 chuỗi
echo "<pre>";
print_r( json_encode($json_string));
echo "</pre>";




 ?>