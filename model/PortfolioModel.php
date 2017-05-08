<?php
function getAllProjects() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM projects ORDER BY project_order";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}