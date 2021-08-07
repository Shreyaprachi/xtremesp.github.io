<?php
if(error_reporting(0));
?>
<?php

$CARD_NO = $_POST["cardno"];
$NAME = $_POST["name2"];
$BLOOD_GROUP = $_POST["bg"];
$AREA = $_POST["area"];
$AGE = $_POST["age"];
$SEX = $_POST["sex"];

$servername="localhost";
$username="root";
$password="";
$dbname="patient";

$conn=new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error())
{
die("Database connection failed" .mysqli_connect_error());
}
$sql1="SELECT * FROM details_table a WHERE a.Cardno = '$CARD_NO'";
$result = $conn->query($sql1);
if($result -> num_rows>0)
{
    while($row = $result->fetch_assoc())
      {
        echo "cardno:".$row["Cardno"]."<br>Name:".$row["Name"]."<br>Area:".$row["Area"]."<br>Blood Group:".
        $row["Bg"]."<br>";
       }
        echo "record already exists ";
        $conn->close();
}
else{
        $sql="INSERT INTO details_table (Name,Cardno,Area,Bg,Age,Sex) VALUES ('$NAME','$CARD_NO','$AREA',
        '$BLOOD_GROUP','$AGE','$SEX')";
        if($conn->query($sql)==TRUE)
        {
            echo "New record created successfully";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
    }    
 
    

?>

<html>
    <head>
        <title>
            Confirmation Page
</title>
<script>
function goBack()
{
    window.location.replace("mainmenu.html");
}    
</script>
</head>
<body>
    <center><input type = "button" value="profile" style = "background-color:white;color:black;padding:5px;
    font-sioze:18px;border:2;padding:8px;" onclick="goBack()">
    </center>
</body>
</html>
