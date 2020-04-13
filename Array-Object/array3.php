<?php  
// PHP program to rotate an array 
// by d elements 
  
/*Function to left Rotate arr[]   
of size n by 1*/
function leftRotatebyOne(&$arr, $n) 
{ 
    $temp = $arr[0]; 
    for ($i = 0; $i < $n - 1; $i++) 
        $arr[$i] = $arr[$i + 1]; 
      
        $arr[$i] = $temp; 
} 
  
/*Function to left rotate arr[]  
  of size n by d*/
function leftRotate(&$arr, $d, $n) 
{ 
    for ($i = 0; $i < $d; $i++) 
        leftRotatebyOne($arr, $n); 
} 
  
/* utility function to print  
   an array */
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i] . " "; 
} 
  
// Driver Code 
$arr = array( 1, 2, 3, 4, 5, 6, 7 ); 
$n = sizeof($arr); 
  
// Function calling 
leftRotate($arr, 2, $n); 
printArray($arr, $n); 
  // 3 4 5 6 7 1 2
// This code is contributed 
// by ChitraNayal 
?> 