<?php
require(ROOT . "model/EditModel.php");
function index()
{
	render("edit/index");
}
function info()
{
	render("edit/info", array(
		'info' => getAllInfo()
		));
}
function portfolio()
{
	render("edit/portfolio", array(
		'projects' => getAllProjects()
		));
}