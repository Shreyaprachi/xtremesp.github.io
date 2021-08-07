<!DOCTYPE html>
<html>
<head>
    <title>
        Registered Details
    </title>
    <style>
        .myBox
        {
            border-style: inset;
            background-image:url(img2.jpg) ;
            padding: 20px;
            font: 24px/36px;
            width: 800px;
            height: 300px;
        }
    </style>
</head>
<body background="img2.jpg">
    <marquee bgcolor = "#ccccc" loop = "-1" scrollamount = "10" width = "100%">
        <h2>Welcome to BCCL</h2></marquee>
        <center><p><h1 style = "color:purple;">Registered Details</h1>
        <hr width = "40%" size = "3"/>
        <center>
        <img src="img1.jpg" width="100" height="100">
    </center>
    <center>
        <b>BHARAT COKING COAL LIMITED</b>
        <br>
        A mini Ratna Company
        <br>
        (A subsidary of Coal India Limited - A Maharatna Comapany)
    </center>
    <br>
    <div class="myBox" align="center">
        
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

$conn=new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error())
{
die("Database connection failed" .mysqli_connect_error());
}
$sql1="SELECT * FROM info_table WHERE Cardno = '$CARD_NO'";
$result = $conn->query($sql1);
if($result ->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        $a=$row["Cardno"];
        $b=$row["Name"];
        $c=$row["Relation"];
        $d=$row["Area"];
        $e=$row["Department"];
        $f=$row["Regidate"];
    }
    echo "<br><br><br><b>Card No.</b>&nbsp;&nbsp" . $a. " ";
    echo "<br><br><br><b>NAME</b>&nbsp;&nbsp" . $b. " ";
    echo "<br><br><br><b>RELATIONSHIP STATUS</b>&nbsp;&nbsp" . $c. " ";
    echo "<br><br><br><b>AREA</b>&nbsp;&nbsp" . $d. " ";
    echo "<br><br><br><b>AGE</b>&nbsp;&nbsp" . $e. " ";
    echo "<br><br><br><b>SEX</b>&nbsp;&nbsp" . $f. " ";

}
?>
</div>
</body>
</html>