<?php
  // grab our post variables
  $first_name = htmlspecialchars($_POST['first_name']);
  $last_name = htmlspecialchars($_POST['last_name']);
  $address = htmlspecialchars($_POST['address']);
  $city = htmlspecialchars($_POST['city']);    
  $state  = htmlspecialchars($_POST['state']);
  $zip = htmlspecialchars($_POST['zip']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);

  // make a mysql connection
  mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
  mysql_select_db("wordpress") or die(mysql_error());

  // insert a row of information into the table "example"
  mysql_query("INSERT INTO example 
    (name, age) VALUES('Timmy Mellowman', '23' ) ") 
  or die(mysql_error());  

  echo "Data Inserted!";

?>