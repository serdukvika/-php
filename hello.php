<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
include_once "action.php";

if (isset($_GET['login']) && $_GET['login'] != "") {
	$admin = $_GET['login'];
	if(check_log($admin) == true){
		echo "<h3>Привет,  $admin!</h3>";

		
	}
	} else {
		header("Location: index.php");
	}
?>
<h2 class="h">Правила работы кинотеатра Grand cinema</h2>
	<p class="log_p">Данные правила разработаны в соответствии с Законом Украины «О защите прав потребителей» и Гражданского кодекса Украины.
	Данные правила обязательны для соблюдения всеми посетителями сети кинотеатров Grand cinema.</p>
	<p class="log_p">1. Касса кинотеатра Multiplex начинает работу за 40 минут до начала первого сеанса.</p>
	<p class="log_p">2. В случае опоздания зрителя на сеанс билеты на этот сеанс не подлежат обмену или возврату в кассу.</p>
	<p class="log_p">3. Бронирование билетов осуществляется по телефону ежедневно с 10:00 до 22:00 без выходных.</p>
	<p class="log_p">4. Бронь на билет снимается за 20 минут до начала сеанса.</p>
	<p class="log_p">5. Фильмы, которые демонстрируются в формате 3D, отмечены специальным значком «3D».</p>
	</body>
	</html>

