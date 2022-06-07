<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//require once in the home directory
//echo $_SERVER['DOCUMENT_ROOT'].
require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';

//1.Define the query

$sql = "INSERT INTO signup(first, last, phoneNumber, city, state, emailAdd, membership)
VALUES(:first, :last, :phoneNumber, :city, :state, :emailAdd, :membership)";


//2. Prepare the statement
$statement = $dbh->prepare($sql);

//3.Bind the Parameters
$statement->bindParam(':first', $first, PDO::PARAM_STR);
$statement->bindParam(':last', $last, PDO::PARAM_STR);
$statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
$statement->bindParam(':city', $city, PDO::PARAM_STR);
$statement->bindParam(':state', $state, PDO::PARAM_STR);
$statement->bindParam(':emailAdd', $emailAdd, PDO::PARAM_STR);
$statement->bindParam(':membership', $membership, PDO::PARAM_STR);

//4. Execute the statement
$statement->execute();