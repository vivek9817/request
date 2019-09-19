<?php

session_start();
if(!isset($_SESSION["alert"])){$_SESSION["alert"]="";}
if(!isset($_SESSION["user"])){$_SESSION["user"]="";}
if(!isset($_SESSION["pass"])){$_SESSION["pass"]="";}



 $conn=mysqli_connect("localhost","root","","demo");
 
 

?>