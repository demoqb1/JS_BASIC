<?php
$conn = new mysqli("localhost","root","","tbl_ajax_crud");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
 
}
else{
	echo 'Kết nối thành công';
}

?>