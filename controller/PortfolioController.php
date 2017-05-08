<?php
require(ROOT . "model/PortfolioModel.php");
function index()
{
	render("portfolio/index", array(
		'projects' => getAllProjects()
		));
}