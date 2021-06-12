<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="saral system services";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
echo $_POST['email'];
if(isset($_POST['email']))
{
    echo "Enquiry form";
    $first_name=$_POST['fname'];
    $Email_ID=$_POST['email'];
    $Phone_Number=$_POST['lname'];
    $Address=$_POST['Address'];
    $Problem=$_POST['Problem'];
}
$sql_query="INSERT INTO forms(`Full Name`,`Email ID`,`Phone Number`, Address, Problem)
VALUES('$first_name','$Email_ID','$Phone_Number','$Address','$Problem')";
if (mysqli_query($conn,$sql_query))
{
    echo "New Details Entry inserted successfullly !";

}
else
{
    echo "Error:" .$sql."". mysqli_error($conn);

}
mysqli_close($conn);