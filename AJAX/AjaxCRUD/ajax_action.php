<?php 
	include 'db.php';
	//Tạo kết nối sau đó gửi dữ liệu qua đây để xử lý và insert vào db

	if (isset($_POST['hoten'])) {
		
		$hoten=$_POST['hoten'];
		$dienthoai=$_POST['dienthoai'];
		$diachi=$_POST['diachi'];
		$mail=$_POST['mail'];
		$ghichu=$_POST['ghichu'];

		$ketqua=mysqli_query($conn,"INSERT INTO infor_user(name,phone,email,address,note) VALUES ('$hoten','$dienthoai','$mail','$diachi','$ghichu')") ;

	}
    //đổ dữ liệu ra 
	$output='';
	$query="SELECT * FROM infor_user ORDER BY id DESC";
	$sql_select=mysqli_query($conn,$query);
	$output.='
	<div class="table table-responsive">
					<table class="table table-bordered">
						 <tr>
						 	<td>Họ và tên</td>
						 	<td>Điện Thoại</td>
						 	<td>Email</td>
						 	<td>Địa Chỉ</td>
						 	<td>Ghi CHú</td>
						 </tr>
					
	';

	//nếu có dữ liệu
	if (mysqli_num_rows($sql_select)>0) {
	//sẻ lặp dữ liệu
		while ($rows=mysqli_fetch_array($sql_select)) {
				$output.=
				'
				<tr>
					<td>'.$rows['name'].'</td>
					<td>'.$rows['phone'].'</td>
					<td>'.$rows['email'].'</td>
					<td>'.$rows['address'].'</td>
					<td>'.$rows['note'].'</td>
				</tr> 

				';
			}	
	}
	else{
		$output.=
		'
		<tr>
		 	<td >Dữ liệu chưa có</td>
		</tr>
		';

	}

	$output.=' 
			</table>
			</div>	
	 ';

	 echo $output;

 ?>
