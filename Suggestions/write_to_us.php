<?php
$server_name="fdb31.biz.nf";

$uname="3932172_saveaquadb";

$password="Savindu1234.";

$database_name="3932172_saveaquadb";

$conn=mysqli_connect($server_name,$uname,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['send']))
{
       $name = $_POST['writename'];
       $email = $_POST['writeemail'];
       $subject = $_POST['writesubject'];
       $textareaValue = $_POST['content'];
        
         $sql_query = "INSERT INTO user_feedback(U_Name,Email,Subject,Message_Box)
         VALUES('$name','$email','$subject','$textareaValue')";

         /*$mailTo = "isavindurachintha@gmail.com";
         $headers = "From: ".$email;
         $txt = "You have received an e-mail from ".$name.".\n\n".$textareaValue;
         mail($mailTo, $subject, $txt, $headers);
         header("Location:write_to_us.php?mailsend");*/


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
