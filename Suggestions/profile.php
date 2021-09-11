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
