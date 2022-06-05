<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Title</title>
		<link rel="stylesheet" type="text/css" href="css/all.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/main.js" defer></script>
	</head>

	<body>

		<main>
			<div class="container">

				<form method="post" action="actions/insert.php">

					<input type="text" placeholder="Write a new task" name="todo" autofocus>

					<button type="submit" name="submit">
						<i class="fa-solid fa-check"></i>
					</button>

				</form>

				<section class="todos">

				</section>

			</div>
		</main>

	</body>
</html>
