<?php
if(error_reporting(0))
?>
<?php
$NAME = $_POST["name1"];
$USER_ID = $_POST["userid"];
$DESIGNATION = $_POST["degn"]; 
$PASSWORD = $_POST["pass"];
$CONFIRM_PASS = $_POST["pass1"];

$servername="localhost";
$username="root";
$password="";
$dbname="patient";
$conn=new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error())
{
die("Database connection failed" .mysqli_connect_error());
}
$sql1 = "select * from user_table a where a.userid = '$USER_ID'";
$result = $conn->query($sql1);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        echo "USERID:" .$row["Userid"]."
        <br>
        Name:" .$row["Name"]. "
        <br>
        Designation : " .$row["degn"]. "
        <br>";
    
    }
    
    echo "record already exists";
    $conn -> close();
    
}

else{
    $sql="INSERT INTO user_table (Name,Userid,Designation,Password,Confirmpassword) VALUES ('$NAME'
    ,'$USER_ID','$DESIGNATION','$PASSWORD','$CONFIRM_PASS')";
    if($conn->query($sql) == TRUE)
    {
        echo "New record created ";
    }

else{
    echo "Error".$sql."<br>".$conn->error;
}
}
?>
<html>
    <title>
        Confirmation Page 
</title>
<script>
function goBack()
{
    window.location.replace("login.html");
}    
</script>
</head>
<body>
    <center>
        <input type = "button"  value = "return" style = "background-color:white;color:black;padding:5px;
        font-size:18px;border:2;padding:8px;" onclick = "goBack()">
    </center>
</body>
</html>
    
