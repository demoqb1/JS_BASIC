<?php 
// Connect Database
$conn = mysqli_connect('localhost', 'root', '', 'e_market') or die ('Can not connect to mysql');
 
// Get List Member
$query = mysqli_query($conn, 'select * from category');
 
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<root>';
if (mysqli_num_rows($query) > 0)
{
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        echo '<items>';
            echo '<name>'.$row['name'].'</name>';
            echo '<status>'.$row['status'].'</status>';
        echo '</items>';
    }
}
echo '</root>';
 
?>