<?php
require_once('Dao.php');
require_once('Session.php');

$dao = new Dao();

$file = 'index.dat';
$html = file_get_contents($file);

$system = 'system';
$create = '';
$explain = '';
$fileEdit = '';
$errro = '';
$url = '';
$file = '';

$article = '<article><h3>IT辞典</h3><p>ここでは主にITの用語や技術などの記事を制作いただけます。</p></article>';

$setCreate = isset($_POST['create']);
$setEdit = isset($_GET['edit']);
$setRead = isset($_GET['read']);
$setNum = isset($_GET['num']);
$setCheck = isset($_GET['check']);
$setRoot = isset($_GET['root']);
$send = isset($_GET['send']);
$setAlready = isset($_GET['already']);

if ($setEdit && $setAlready) {
	$setSend = "edit";
	$action = "check.php?edited";
} else {
	$action = "check.php";
	$setSend = "send";
}

if ($setEdit) {
	$error = $_SESSION['error'];
	$system = 'Edit';
	$article = '';
	$explain = '<p><a href="./explain.html" target="_blank">編集方法</a></p>';
	$create = '<form action="' . $action . '" method="post">ページソース<br><textarea name="source" rows="25" cols="80">' . $_SESSION['source'] . '</textarea><br><input type="submit" name="' . $setSend . '" value="確認"></form>';
} elseif ($setRead) {
	$system = 'read';
	$create = '';
	$article = '';
	$sql = 'SELECT * FROM wiki_info ORDER BY text_id ASC';
	$readData = $dao->queryRun($sql);

	if ($setRoot) {
		foreach ($readData as $data) {
			$url .= '<a href="?read&num=' . $data['text_id'] . '"><span>' . $data['text_title'] . '</span></a><a href=?read&root&del=' . $data['text_id'] . '>' . ' | 削除</a><br>';
		}
	} else {
		foreach ($readData as $data) {
			$url .= '<a href="?read&num=' . $data['text_id'] . '"><span>' . $data['text_title'] . '</span></a><br>';
		}
	}

	if ($setNum) {
		$sql = 'SELECT * FROM wiki_info';
		$where = ' WHERE ' . ' text_id=' . $_GET['num'];
		$sql .= $where;
		$fileData = $dao->queryRun($sql);

		foreach ($fileData as $fd) {
			$_SESSION['file'] = $fd['text_file'];
			$_SESSION['originalFile'] = $fd['original_file'];
			$_SESSION['text_id'] = $fd['text_id'];
		}

		$file = $_SESSION['file'];
		$originalFile = $_SESSION['originalFile'];
		$html = str_replace("{{readHtml}}", $file, $html);
		$fileEdit = '<p><span><a href="?edit&already">編集する</a></span></p>';
		$originalFile = str_replace("<br>", "\n", $originalFile);
		$_SESSION['source'] = $originalFile;
		$html = str_replace("{{fileEdit}}", $fileEdit, $html);
	}

	if ($setRoot && $_GET['del']) {
		if ($_GET['root'] == '403') {
			$delete = 'DELETE FROM wiki_info WHERE text_id=' . $_GET['del'];
			$dao->queryRun($delete);
			header('Location:./?read&root&del');
			exit;
		}
	}

	if ($setRead && $setNum) $url = '';
}

if ($send) {
	$_SESSION['source'] = '';
	header("Location:./thank.php");
	exit;
}

/*
$replaceMapList = [
	"{{system}}" => $system,
	"{{article}}" => $article,
];

$html = replaceHoge($replaceMapList, $html);
echo $html;
*/


$html = str_replace("{{system}}", $system, $html);
$html = str_replace("{{article}}", $article, $html);
$html = str_replace("{{explain}}", $explain, $html);
$html = str_replace("{{create}}", $create, $html);
$html = str_replace("{{error}}", $error, $html);
$html = str_replace("{{data}}", $url, $html);
$html = str_replace("{{readHtml}}", $file, $html);
$html = str_replace("{{fileEdit}}", $fileEdit, $html);
echo $html;
