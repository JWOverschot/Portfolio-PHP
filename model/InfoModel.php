<?php
function getInfo() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM info";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetch();
}

function getAge()
{
	$db = openDatabaseConnection();

	$sql = "SELECT TIMESTAMPDIFF(YEAR, info_birthdate, CURDATE()) AS age FROM info";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetch();
}