<?php
require_once('Session.php');

$file = 'check.dat';
$html = file_get_contents($file);
$send = isset($_GET['send']);
$edit = isset($_GET['edit']);

$_SESSION['source'] = $_POST['source'];
$error = '';
$originalData = explode("\n", $_SESSION['source']);
$characterData = $originalData;
$sources = implode("<br>", $characterData);
$htmlCharacter = '';
$return = '';
$_SESSION['edited'] = isset($_GET['edited']);

$replaceTitle = [
	'--' => "<h1>",
	'-/' => "</h1>",
];
$replaceHeading = [
	'++' => "<h2>",
	'+/' => "</h2>",
];
$replaceParagraph = [
	'**' => "<p>",
	'*/' => "</p>",
	'[]' => "<br>",
];

if ($_SESSION[''])
	if ($_SESSION['source'] == '') {
		$_SESSION['error'] = '記事の内容を入力してください';
		header("Location:./?edit");
		exit;
	}

if (!isset($_GET['edit'])) {
	$_SESSION['error'] = '';
}


$title = '';
foreach ($characterData as $character) {
	if (strpos($character, '--') !== false || strpos($character, '-/') !== false) {
		$title = trim(str_replace(array_keys($replaceTitle), '', $character));
		$htmlCharacter .= str_replace(array_keys($replaceTitle), array_values($replaceTitle), $character);
	} elseif (strpos($character, '++') !== false || strpos($character, '+/') !== false) {
		$htmlCharacter .= str_replace(array_keys($replaceHeading), array_values($replaceHeading), $character);
	} elseif (strpos($character, '**') !== false || strpos($character, '*/') !== false || strpos($character, '[]') !== false) {
		$htmlCharacter .= str_replace(array_keys($replaceParagraph), array_values($replaceParagraph), $character);
	}
}

if ($title == '') {
	$_SESSION['error'] = "タイトルは必須です。";
	header("Location:./?edit");
	exit;
}

$html = str_replace("{{source}}", $htmlCharacter, $html);
$html = str_replace("{{error}}", $error, $html);
$html = str_replace("{{return}}", $return, $html);
echo $html;

$_SESSION['title'] = $title;
$_SESSION['originalData'] = $sources;
$_SESSION['htmlCharacter'] = $htmlCharacter;

if ($send) {
	$_SESSION['source'] = '';
	header("Location:./thank.php");
	exit;
}
