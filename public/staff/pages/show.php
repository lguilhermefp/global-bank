<?php require_once('../../../private/functions.php'); ?>

<a href="index.php">&laquo; Go back</a><br />

<?php
	$id = $_GET['id'] ?? '1';

	echo htmlchars($id);
?>
