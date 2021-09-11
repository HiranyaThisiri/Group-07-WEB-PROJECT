<?php

$server_name="localhost";

$uname="root";

$password="";

$database_name="save_aqua_db";

$conn=mysqli_connect($server_name,$uname,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
       $first_name = $_POST['fanme'];
       $last_name = $_POST['lname'];
       $email = $_POST['email'];
       $area_code = $_POST['area_code'];
        $phone_no = $_POST['phone'];
        $gender	 = $_POST['gender'];
         $country = $_POST['kingdom'];
        $user_name = $_POST['username'];
        $password = $_POST['password'];

         $sql_query = "INSERT INTO registration(first_name,last_name,email,area_code,phone_no,gender,country,user_name,
         password)VALUES('$first_name','$last_name','$email','$area_code','$phone_no','$gender','$country','$user_name','$password')";

   if (mysqli_query($conn, $sql_query)) 
	  {
		echo "New Details Entry inserted successfully !";
	   } 
	   else
        {
		
		echo("Error description: ".$sql_query."". mysqli_error($conn));
	     }
	        mysqli_close($conn);
}

?>
