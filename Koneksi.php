<?php
$host ='localhost';
$db='googlemaps_algo_dijkstra';
$username='root';
$password='';

$dsn = "mysql:host=$host;dbname=$db";

	try{
		$conn=new PDO($dsn, $username, $password);
		if($conn){
		echo "connected to the <strong>$db</strong> db succesfully";
		}
	}catch (PDOException $e){
		echo $e->getmessage();
	}