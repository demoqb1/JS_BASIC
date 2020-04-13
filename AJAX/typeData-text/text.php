<?php 
    // Thiết lập font chữ UTF8 để khỏi bị lỗi font
    header('Content-Type: text/html; charset=utf-8');
     
    // Kết nối database
    $conn = mysqli_connect('localhost', 'root', '', 'e_market') or die ('Can not connect to mysql');
     
    // Lấy danh sách thành viên
    $query = mysqli_query($conn, 'select * from category');
     
    // Kiểm tra có dữ liệu không
    if (mysqli_num_rows($query) > 0)
    {
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        echo '<tr>';
           echo '<td>';
               echo 'Tên Danh Mục';
           echo '</td>';
           echo '<td>';
                echo 'Ngày Tạo';
           echo '</td>';
        echo '<tr>';
         
        // Lặp danh sách và hiển thị dạng table
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
             
            echo '<tr>';
                echo '<td>';
                    echo $row['name'];
                echo '</td>';
                echo '<td>';
                    echo $row['created_at'];
                echo '</td>';
            echo '<tr>';
        }
        echo '</table>';
    }
 ?>