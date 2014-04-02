<?php
header("refresh:2; url=$_POST[buildings]"); 

// Connect to MySQL server
$con=mysqli_connect("mysql3.000webhost.com","a8003312_team5","eece310","a8003312_data");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (empty($_POST[username])) 
{
    $name = "Anonymous";
}
else
{
$name = $_POST[username];
}

if (empty($_POST[usercomments])) 
{
    $comment= "No comments";
}
else
{
$comment= $_POST[usercomments];
}

$error = false;
if ($_POST[uploadspeed] == 0) 
{
    $upload = NULL;
    $download = NULL;
}
else 
{
$upload= $_POST[uploadspeed];
$download= $_POST[downloadspeed];
}
if ($_POST[uploadspeed] == 0 && empty($_POST[usercomments]))
{
echo "Please leave a comment or run the speed test before you upload.";
}

else
{
$sql = "INSERT INTO data(id, user, location, comment, upload, download)
VALUES ('0', '$name', '$_POST[buildings]', '$comment', '$upload', '$download')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Your submission has been successful.";
}
echo "<br>Please be patient while you are being redirected...";
?>
	