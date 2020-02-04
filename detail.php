<?php

include('functions.php');
$cars=jsonToArray('data.json');

if(!isset($_GET['id'])){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($cars)-1){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}

$title=$cars[$_GET['id']]['make'].' '.$cars[$_GET['id']]['model'];
require('header.php');
?>
		<h1><?= $cars[$_GET['id']]['make'].' '.$cars[$_GET['id']]['model'] ?></h1>
		<p><?= $members[$_GET['id']]['price'] ?></p>
		<img src="<?= $members[$_GET['id']]['picture'] ?>" width="500" />
		<p><?= $members[$_GET['id']]['condition'] ?></p>
