<?php
function getInfo($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM info WHERE info_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllInfo()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM info";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getProject()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM projects WHERE project_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllProjects()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM projects ORDER BY project_order";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}