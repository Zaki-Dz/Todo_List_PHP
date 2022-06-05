<?php

	include '../include/connect.php';
		
	$query = "delete from todos where id = ?";

	$pdo->prepare($query)->execute([$_GET['id']]);