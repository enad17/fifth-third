<?php
  // grab our post variables
  $first_name = htmlspecialchars($_POST['first_name']);
  $last_name = htmlspecialchars($_POST['last_name']);
  $address = htmlspecialchars($_POST['address']);
  $address2 = htmlspecialchars($_POST['address2']);
  $city = htmlspecialchars($_POST['city']);    
  $state  = htmlspecialchars($_POST['state']);
  $zip = htmlspecialchars($_POST['zip']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $areCustomer = htmlspecialchars($_POST['customer']);
  $type = htmlspecialchars($_POST['type']);

  // make a mysql connection
$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wordpress", $con);

$sql = "INSERT INTO sweepstakes (first_name, last_name, address, address2, city, state, phone, email, isCustomer, type)
VALUES
('$first_name', '$last_name', '$address', '$address2', '$city', '$state', '$phone', '$email', '$areCustomer', '$type')";

if (!mysql_query($sql,$con)) {
  die('Error: ' . mysql_error());
}

echo '{ "message": "success" }';

mysql_close($con);

?>