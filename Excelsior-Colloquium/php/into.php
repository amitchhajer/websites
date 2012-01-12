<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="INSERT INTO Persons (FirstName, LastName, Institute, EmailAddress, Year, Competetion, TeamMembers, ContactNumber)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[iname]','$_POST[email]','$_POST[year]','$_POST[competetion]','$_POST[members]','$_POST[contact]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    echo "THANK YOU FOR REGISTERING-- YOUR REGISTRATION IS SUCCESSFULL";
	

mysql_close($con)
?>