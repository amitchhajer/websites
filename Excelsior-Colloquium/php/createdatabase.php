<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Institute varchar(50),
EmailAddress varchar(50),
Year varchar(10),
Competetion varchar(15),
TeamMembers varchar(10),
ContactNumber varchar(15)
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>