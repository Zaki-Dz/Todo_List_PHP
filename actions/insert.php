<?php

	include '../include/connect.php';

	$query = "insert into todos (content) values (?)";

	$pdo->prepare($query)->execute([$_GET['todo']]);