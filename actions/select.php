<?php

	include '../include/connect.php';

	$query = 'select * from todos';

	$stmt = $pdo->query($query);

	while ($row = $stmt->fetch()) {
		echo '<div class="todo">';
			echo $row['content'];
			echo '<button id=' . $row['id'] . '><i class="fa-regular fa-trash-can"></i></button>';
		echo '</div>';
	}