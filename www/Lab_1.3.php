<html>
<head>
	<title>Задание 3</title>
</head>
<body>
	<?php
		$object = array('Название'=>array('Гантеля', 'Перекладина'), 'Вес'=>array('5', '0'), 'Производитель'=>array('A', 'B'), 'Применение'=>array('Руки', 'Спина'));
		$sobject = array('Название'=>'Гантеля', 'Вес'=>'5', 'Производитель'=>'A', 'Применение'=>'Руки');
	?>
	<table align=center border=1>
	<tr align=center>
		<th>Название</th>
		<th>Вес</th>
		<th>Производитель</th>
		<th>Применение</th>
	</tr>
	<tr align=center>
		<td> <?php echo $sobject['Название'] ?> </td>
		<td> <?php echo $sobject['Вес'] ?> </td>
		<td> <?php echo $sobject['Производитель'] ?> </td>
		<td> <?php echo $sobject['Применение'] ?> </td>
	</tr>
	</table>
	<hr>
	<table align=center border=1>
		<tr align=center>
			<th>Название</th>
			<th>Вес</th>
			<th>Производитель</th>
			<th>Применение</th>
		</tr>
		<?php
			foreach($object as $name)
			{
				?>
				<tr>
				<?php
				foreach($name as $subname)
				{
					?>
					<td> <?php echo $subname ?> </td>
					<?php
				}
				?>
				</tr>
				<?php
			}
		?>
	</table>

	<form action="http://myfirstsite.ru/Lab_1.1.php">
		<input type="submit" value="Задание 1">
	</form>
	<form action="http://myfirstsite.ru/Lab_1.2.php">
		<input type="submit" value="Задание 2">
	</form>
</body>
</html>