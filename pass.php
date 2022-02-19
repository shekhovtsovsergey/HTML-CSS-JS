<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		function readInt(id){
			var number = document.getElementById(id).value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function clear(id) {
			document.getElementById(id).value = "";
		}


		function passwordGen() {
			var userData = readInt("input");
			var newPassword = "";
			var chars = "1234567890AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
			for (var i = 0; i < userData; i++){
				newPassword += chars.charAt(Math.floor(Math.random() * chars.length));     
			}
			if(isNaN(userData) || userData <= 0) {
				write("Некорректное число.\nВведите положительное число.");
			} else {
				clear("input");
				write(newPassword);
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

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Введите цифрой длину необходимого пароля.</p>
				<input type="text" id="input">
				<br>
				<a href="#" onClick="passwordGen();" id="button">Начать</a>				
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