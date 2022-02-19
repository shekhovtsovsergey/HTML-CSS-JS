<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 6;
		var playerNumber = 1; 




		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;


		function changePlayer(player) {
			if(player == 1) {
				player = 2;
			} else {
				player = 1;
			}
			playerNumber = player;
		}


		function clear(userAnswer) {
			document.getElementById(userAnswer).value = "";
		}



			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, Игрок № " + playerNumber + " вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				changePlayer(playerNumber);
				clear("userAnswer");
				write("Вы ввели слишком большое число<br> Ход другого игрока. Игрок № " + playerNumber + " Введите число от 1 до 100");
			} else if(userAnswer < answer){
				changePlayer(playerNumber);
				clear("userAnswer");
				write("Вы ввели слишком маленькое число<br>Ход другого игрока. Игрок № " + playerNumber + " Введите число от 1 до 100");				
			}
		}






	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>



<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info">Ход игрока 1. Введите число от 0 до 100.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Sergey Shekhovtsov
<div>


</body>
</html>