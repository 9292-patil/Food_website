<?php
    if($_REQUEST['name'] && $_REQUEST['email'] && $_REQUEST['phone'] && $_REQUEST['message'] )
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $message=$_REQUEST['message'];
   
    echo "Your response Submitted Successfully!<br>"." <br> ".$name ." <br> "." <br> ".$email ."<br>"." <br> " .$phone ."<br>"." <br> " .$message."<br>"." <br> ". "Thank You !";
    }
?>