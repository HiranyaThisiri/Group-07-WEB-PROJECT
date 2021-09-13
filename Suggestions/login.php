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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
     <link rel="shortcut icon" href="../images/Layer 01.png">
    <link rel="stylesheet" href="Login_loading_screen.css">
    <link rel="stylesheet" href="Animation.css">
<style>
body
{
  background-image: url('../images/Suggestion_04.jpg');
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
}
.input69, select {

 width: 100%;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 5px;
 resize: vertical;
 color: #2b0ff6;
 margin-top: 0.5vh; /*form select top chang*/
 box-sizing: border-box;
 /*margin-top: 10px;*/
}
legend
{
  text-align: center;
  margin-bottom: 15px ;
  color: white;
  height: 50px;
  padding-top: 0px ;
  padding-bottom: 5px;
  background-color: rgb(0, 0, 0, 0.4);
  border-radius: 2vh 2vh 2vh 2vh;;
  margin-top: -50px;
}
label
 {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: white;
  font-size: 22px;
   /*margin-top: 50px;*/
}

.save
{
  background-color: #04AA6D;
  color: white;
  margin: 0.2vh 0vh 0vh 3vh;
  border: none;
  padding: 2.5vh 12vh;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=reset] {
  background-color: #04AA6D;
  color: white;
  margin: 0.2vh 0vh 0vh 3vh;
  border: none;
  border-radius: 4px;
  padding: 2.5vh 12vh;
  cursor: pointer;
  float: right;
  margin-right: -0.5%;
  font-size: 18px;
}
input[type=submit] {
  
  font-size: 18px;
}
input[type=reset]:hover {
  background-color: #5390F5;
}
.save:hover {
 background-color: #5390F5;
}
#cotainer_sub1 {
  /*border-radius: 10vh 10vh 10vh 10vh;
  background-color: rgb(0, 0, 0, 0.5);*/
  padding-left: 15vw;
  padding-right: 15vw;
  margin-top: 10vw;
  
 }
.formcss1
 {
  background-color: rgb(0, 0, 0, 0.5);
  border-radius: 5vh 5vh 5vh 5vh;
  padding: 60px;
  margin-bottom: -50vh;


 }
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after 
{
  content: "";
  display: table;
  clear: both;
}
#pword
{
  width: 99%;
  height: 42px;
  border-radius: 5px;
  margin-bottom: 1vh;
  color: #2b0ff6;
}


@media screen and (max-width: 900px) {
  .col-25, .col-75
  {
    width: 100%;
    margin-bottom: -18px;

  }


   .save , input[type=reset] 
  {
    width: 100%;
    margin-top: 0;
    padding: 15px;

  }
   input[type=reset] 
  {
    width: 100%;
    margin-top: 2%;
    margin-right: 0%;
    
  }
.formcss1
  {
    margin-top: -10vh;
    padding: 30px;


  }
  #cotainer_sub1 {
  
  padding: 10vw;
  margin-top: 10vw;
  
 }

}
@media screen and (max-width: 768px) {
  .col-25, .col-75
  {
    width: 100%;
    margin-bottom: -20px;

  }
  
  .save , input[type=reset] 
  {
    width: 100%;
    margin-top: 0;
    padding: 15px;

  }
   input[type=reset] 
  {
    width: 100%;
    margin-top: 2%;
    margin-right: 0%;
    
  }
.formcss1
  {
    margin-top: -8vh;
    padding:50px;
    /*width: 600px;
    margin-left: ;*/
    
  }

  label
 {
  padding: 18px 18px 18px 0;
 
  font-size: 18px;
   /*margin-top: 50px;*/
}
 #cotainer_sub1 {
  
  padding: 10vw;
  margin-top: 10vw;
  
 }
}
@media screen and (max-width: 600px) {
  .col-25, .col-75
  {
    width: 100%;
    margin-bottom: -20px;

  }
  
  }
  .save , input[type=reset] 
  {
    width: 100%;
    margin-top: 0;
    padding: 15px;

  }
   input[type=reset] 
  {
    width: 100%;
    margin-top: 2%;
    margin-right: 0%;
    
  }
.formcss1
  {
    margin-top: -5vh;

  }

}
@media screen and (max-width: 500px) {
  .formcss1
  {

    width: 342px;
    margin-left: -40px;
    margin-top: -2vh;
  }

  }
  @media screen and (max-width: 400px) {
  .formcss1
  {

    width: 260px;
    margin-left: -80px;
    margin-top: 10vh;
  }
  #cotainer_sub1 {
  
  padding-left: 20vw;
  margin-top: 0vh;
  
 }

  }
   @media screen and (max-width: 350px) {
    #cotainer_sub1 {
  
  padding: 20vw;
  margin-top: 20vh;
  
 }
  .formcss1
  {

    width: 270px;
    margin-left: -40px;
    margin-top: -2vh;
  }
  }
    @media screen and (max-width: 300px) {
  .formcss1
  {

    width: 230px;
    margin-left: -65px;
    margin-top: -2vh;
  }
  }
 @media screen and (max-width: 250px) {
  .formcss1
  {

    width: 190px;
    margin-left: -30px;
    margin-top: 10vh;
  }
  }

</style>
   </head> 
<body>

<div class="loadack"><div id="loader"></div></div>
 <div id="stars"></div>

    <div id="cotainer_sub1">
        <form method="POST" name="form2" class="formcss1" onsubmit="return validate()";>
            <legend><h1>Sign In</h1></legend>
            <div class="row">
      <div class="col-25">
        <label for="Email Add"> Email </label>
      </div>
      <div class="col-75">
        <input type="email" class="input69" id="Email" name="email" placeholder="Email Address" > <br>
         </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="passwd">Password</label>
      </div>
      <div class="col-75">
       <input type="password" id="pword" name="password" placeholder="Enter Your Strong Password" ><br><br>
      </div>
    </div>

    <div class="row">

      <input type="submit" class="save" value="Sign In" name="submit">

      <input type="reset" class="cancel" value="Cancel" name="reset">
    </div>


        </form>
    </div>
    <!--<table border="1">
    <form action="profile.php" method="POST" class="box">

<th><h1>Sign In</h1></th>

<td><input type="text" placeholder="username" class="usid"><br></td>
            <td><input type="password" placeholder="password" class="usid"><br></td>
            <td><input type="submit" value="Signin" class="button"></td>
    </form>
</table>-->
  <script>
 
let spinnerWrapper = document.querySelector('.loadack');

 window.addEventListener('load', function () {
spinnerWrapper.parentElement.removeChild(spinnerWrapper);
});

</script>

</body>
</html>

