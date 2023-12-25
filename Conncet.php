<?php
$firstName=$_REQUEST['First Name'];
$LastName=$_REQUEST['Last Name'];
$Email=$_REQUEST['Email']
$Password=$_REQUEST['Password'];
if(isset($_POST['Sumbit']))
{
$host="localhost";
$user="root";
$password="";
$db="guest";
}


$conn=mysqli_connect($host,$user,$password,$db);

$insert="insert into registration values('$firstName','$LastName','$Email','$Password') ";
mysqli_query($conn,$insert);

if($conn){


    echo("<h1 style= 'color:green';> Your Regesteration Is Done</h1>");
    
    
}
else{

    echo("<h1 style=  'color:red';> Error</h1>");

}



    




    












