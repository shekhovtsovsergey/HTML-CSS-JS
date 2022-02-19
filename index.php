<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">

<?php
	include "menu.php";
?>

	<h1>Личный сайт</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Сергей Ш</i>. Это мой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<a href="index.php">Главная</a>,
			<a href="about.php">Обо мне</a>,		
			<a href="puzzle.php">Загадки</a>,
			<a href="guess.php">Угадайка</a>,
			<a href="guess-mylty.php">Угадайка - 2 игрока</a>,
			<a href="pass.php">Генератор паролей</a>

			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Sergey Sh
<div>


</body>
</html>