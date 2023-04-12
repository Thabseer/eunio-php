<?php

$servername="localhost";
$username="root";
$password="";
$database_name="eunoiadb";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $name=$_POST['text'];
    $phone=$_POST['phone'];
    $place=$_POST['place'];
    $prgms=$_POST['program'];
    $pkgs=$_POST['package'];

    $sql_query = "INSERT INTO booking_details (name, mobile, place, program, package) VALUES ('$name', '$phone', '$place', '$prgms', '$pkgs')";
    if (mysqli_query($conn, $sql_query))
    {
        readfile('success.html');
    }
    else
    {
    echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>