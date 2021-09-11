<?php

if(isset($_FILES["myfile1"]["name"])){

$fname=$_FILES["myfile1"]["name"];
  $ftemp=$_FILES["myfile1"]["tmp_name"];
  $flag=move_uploaded_file($ftemp,"img/$fname");
  if($flag)
  {echo "File Uplaod Successfully!";
    echo"$flag";}
  else
  {echo " Sorry couldn't move";}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Profile </title>
  <link rel="stylesheet" href="profile_loading_screen.css">
  <link rel="stylesheet" href="Animation.css">
  
<style>
