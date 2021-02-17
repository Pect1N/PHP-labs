<html>
<head>
	<title>Задание 2</title>
</head>
<body bgcolor = #33ff00>
	<table border=1 bgcolor=#0033ff>
		<tr>
			<td colspan="2">Введенные данные</td>
		</tr>
		<tr>
			<td>Рост (см)</td>
			<td>
				<?php 
					$Rost = mt_rand(50, 250);
					echo $Rost;
					$Rost /= 100;
				?>
			</td>
		</tr>
		<tr>
			<td>Вес (кг)</td>
			<td>
				<?php 
					$Ves = mt_rand(50, 150);
					echo $Ves;
				?>
			</td>
		</tr>
	</table> <br>
	<?php 
		$Result = $Ves / ($Rost * $Rost);
		if ($Result < 18.5)
		{
			echo "Дефицит массы тела<br>";
			echo "Риск соутствующих заболеваний: Низкий (овышен риск других заболеваний)";
		}
		elseif ($Result >= 18.5 && $Result <= 24.9)
		{
			echo "Нормальная масса тела<br>";
			echo "Риск соутствующих заболеваний: Обычный";
		}
		elseif ($Result >= 25.0 && $Result <= 29.9)
		{
			echo "Избыточная масса тела (предожирение)<br>";
			echo "Риск соутствующих заболеваний: Повышенный";
		}
		elseif ($Result >= 30.0 && $Result <= 34.9)
		{
			echo "Ожирение 1 степени<br>";
			echo "Риск соутствующих заболеваний: Высокий";
		}
		elseif ($Result >= 35.0 && $Result <= 39.9)
		{
			echo "Ожирение 2 степени<br>";
			echo "Риск соутствующих заболеваний: Очень высокий";
		}
		elseif ($Result >= 40.0)
		{
			echo "Ожирение 3 степени<br>";
			echo "Риск соутствующих заболеваний: Черезвычайно высокий";
		}
	?>
	<form action="http://myfirstsite.ru/Lab_1.1.php">
		<input type="submit" value="Задание 1">
	</form>
	<form action="http://myfirstsite.ru/Lab_1.3.php">
		<input type="submit" value="Задание 3">
	</form>
</body>
</html>