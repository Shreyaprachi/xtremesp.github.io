<?php

$CARD_NO = $_POST["cardno"];
$NAME = $_POST["name3"];
$RELATIONSHIP = $_POST["relation"];
$AREA = $_POST["area"];
$DEPARTMENT = $_POST["depart"];
$DATE = $_POST["date1"];

$servername="localhost";
$username="root";
$password="";
$dbname="patient";

$conn = new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error())
{
die("Database connection failed" .mysqli_connect_error());
}
$sql1="SELECT * FROM info_table WHERE Cardno = '$CARD_NO'";
$result = $conn->query($sql1);
if($result -> num_rows>0)
{
    $sql = "INSERT INTO info_table (Cardno,Name,Relation,Area,Department,Regidate) VALUES ('$CARD_NO',
    '$NAME','$RELATIONSHIP','$AREA','$DEPARTMENT','$DATE')";

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
    window.location.replace("final.php");
}    
</script>
</head>
<body>
    <center><input type = "button" value="profile" style = "background-color:white;color:black;padding:5px;
    font-size:18px;border:2;padding:8px;" onclick="goBack()">
    </center>
</body>
</html>
