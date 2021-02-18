<html>
<head>
	<title>Таблица</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<?php
		$SecondName = 'Иванов';
		$Name = 'Иван';
		$FatherName = 'Иванович';
		$Day = '01.01.01.';
		$Place = 'Москва';
		$Hight = '180';
		$Mass = '80';
	?>
	<!-- Вывод таблицы с данными -->
	<table bgcolor = "yellow" border="1">
		<tr>
			<th>Фамилия</th>
			<th>Имя</th>
			<th>Отчество</th>
			<th>Дата рождения</th>
			<th>Место рождения</th>
		</tr>
		<tr>
			<td> <?php echo htmlspecialchars($_POST['Фамилия']); ?> </td>
			<td> <?php echo ($_POST['Имя']); ?> </td>
			<td> <?php echo ($_POST['Отчество']); ?> </td>
			<td> <?php echo ($_POST['Дата']); ?> </td>
			<td> <?php echo ($_POST['Место']); ?> </td>
		</tr>
		<tr>
			<th colspan="5"> Дополнительная информация </th>
		</tr>
		<tr>
			<td rowspan="2"> <img src="1.jpg" alt="" width = "50px" height="50px"> </td>
			<th> Рост </th>
			<td colspan="3"> <?php echo ($_POST['Рост']); ?> </td>
		</tr>
		<tr>
			<th> Вес </th>
			<td colspan="3"> <?php echo ($_POST['Вес']); ?> </td>
		</tr>
	</table>
	<hr>
	<table bgcolor = red border="1">
		<tr>
			<th>Фамилия</th>
			<th>Имя</th>
			<th>Отчество</th>
			<th>Дата рождения</th>
			<th>Место рождения</th>
		</tr>
		<tr>
			<td> <?php echo $SecondName; ?> </td>
			<td> <?php echo $Name; ?> </td>
			<td> <?php echo $FatherName; ?> </td>
			<td> <?php echo $Day; ?> </td>
			<td> <?php echo $Place; ?> </td>
		</tr>
		<tr>
			<th colspan="5"> Дополнительная информация </th>
		</tr>
		<tr>
			<td rowspan="2"> <img src="1.jpg" alt="" width = "50px" height="50px"> </td>
			<th> Рост </th>
			<td colspan="3"> <?php echo $Hight; ?> </td>
		</tr>
		<tr>
			<th> Вес </th>
			<td colspan="3"> <?php echo $Mass; ?> </td>
		</tr>
	</table>


	<form action="http://myfirstsite.ru/Lab_1.0.php">
		<input type="submit" value="Форма">
	</form>
	<form action="http://myfirstsite.ru/Lab_1.2.php">
		<input type="submit" value="Задание 2">
	</form>
	<form action="http://myfirstsite.ru/Lab_1.3.php">
		<input type="submit" value="Задание 3">
	</form>
</body>
</html>