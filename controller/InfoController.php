<?php

require(ROOT . "model/InfoModel.php");

function index()
{
	render("info/index", array(
		'info' => getInfo(),
		'age' => getAge()
	));
}