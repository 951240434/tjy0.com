<?php
$con=mysqli_connect("localhost","root","root","tjycom");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql='select account from tjy0user where account = "$_POST[account]"';

$result=mysqli_query($con,$sql);
  
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);


mysqli_close($con);
?>