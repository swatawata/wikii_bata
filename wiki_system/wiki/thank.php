<?php
require_once('Dao.php');
require_once('Session.php');

$dao = new Dao();

$setEdit = $_SESSION['edited'];
$title = $_SESSION['title'];
$date = date("Y-m-d H:i:s");
$time = floor(microtime(true) * 10);

// $textFile = 'index.html';
// $dat = file_get_contents($textFile);
// var_dump($dat);
// $dat = str_replace("{{title}}", $_SESSION['title'], $dat);
// $dat = str_replace("{{text}}", $_SESSION['htmlCharacter'], $dat);

if ($setEdit) {
	var_dump($dao);
	$sql = "UPDATE wiki_info SET text_file = " . $dao->quote($_SESSION['htmlCharacter']) . " WHERE text_id = " . $_SESSION['text_id'];
	$dao->queryRun($sql);
	$sql = "UPDATE wiki_info SET original_file = " . $dao->quote($_SESSION['originalData']) . " WHERE text_id = " . $_SESSION['text_id'];
	$dao->queryRun($sql);
	$sql = "UPDATE wiki_info SET text_title = " . $dao->quote($_SESSION['title']) . " WHERE text_id = " . $_SESSION['text_id'];
	$dao->queryRun($sql);
} else {
	$dao->newData($title, $_SESSION['originalData'], $_SESSION['htmlCharacter'], $date);
}

$file = 'thank.dat';
$html = file_get_contents($file);

echo $html;

$_SESSION = [];
session_destroy();
