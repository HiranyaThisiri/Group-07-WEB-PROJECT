<?php
if(isset($_POST['email'])&&isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];


// database connection here
$con = new mysqli("localhost", "root", "","save_aqua_db");
if ($con-> connect_error)
 {
  die("Failed to connect: ".$con->connect_error);
}

else
{
  $stmt = $con->prepare("select * from registration where email = ?");
  $stmt -> bind_param("s",$email);
  $stmt->execute(); 
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) 
  {
    $data = $stmt_result->fetch_assoc();
    $data['password']=str_replace(' ','',$data['password']);


    if($data['password']== $password)
    {
      echo "<h2>Log in Successfully</h2>";
      //window.location.replace="profile.php";
      //action="profile.php";
      $link="save_aqua_temp/profile.php";
      header('location:profile.php');
    }
    else
    {
      echo "<h2>Invalid Email or Password</h2>";
    }
  }
  else
  {
    echo "<h2> Invalid Email or password </h2>";
  }

}
}
?>
