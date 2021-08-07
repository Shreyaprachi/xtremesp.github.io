<?php
if(error_reporting(0))
?>
<?php
$USER_ID=$_POST["userid"];
$PASSWORD=$_POST["pass"];

$servername="localhost";
$username="root";
$password="";
$dbname="patient";

$conn=new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error())
{
die("Database connection failed" .mysqli_connect_error());
}
$sql1="SELECT * FROM user_table WHERE Userid = '$USER_ID' AND Password = '$PASSWORD'";

$result = $conn->query($sql1);

if($result->num_rows>0)
{
    echo "successfully connected";
    $conn->close();
    header("Location: mainmenu.html");
}
else
{
    echo "Enter correct credentials";
}
?>