<html>
<head>
	<title>Задание 3</title>
</head>
<body bgcolor = #33ff00>
	<?php
		$object = array('Гантеля'=>array('Гантеля', '5', 'A', 'Руки'), 'Перекладина'=>array('Перекладина', '0', 'B', 'Спина'));
		$sobject = array('Гантеля'=>array('Гантеля', '5', 'A', 'Руки'), 'Блин'=>array('Блин', '2', 'С', 'Руки'), 'Дорожка'=>array('Беговая дорожка', '40', 'B', 'Ноги'), 'Велотренажер'=>array('Велотренажер', '40', 'D', 'Ноги'));
	?>
	<table align=center border=1 bgcolor=red>
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
	<hr>
	<table align=center border=1 bgcolor=green>
		<tr align=center>
			<th colspan=6>Силовое</th>
			<th colspan=6>Кардио</th>
		</tr>
		<tr>
			<?php
				foreach($sobject as $name)
				{
					$flag = 0;
					foreach($name as $subname)
					{
						if($flag == 0)
						{
							?>
								<td colspan=3>
									<?php
											echo $subname;
											$flag = 1;
									?>
								</td>
							<?php
						}
					}
				}
			?>
		</tr>
		<tr>
			<?php
					foreach($sobject as $name)
					{
						$flag = 0;
						foreach($name as $subname)
						{
							if($flag != 0)
							{
								?>
									<td>
										<?php
												echo $subname;
										?>
									</td>
								<?php
							}
							$flag = 1;
						}
					}
				?>
		</tr>
	</table>

	<form action="http://myfirstsite.ru/Lab_1.1.php">
		<input type="submit" value="Задание 1">
	</form>
	<form action="http://myfirstsite.ru/Lab_1.2.php">
		<input type="submit" value="Задание 2">
	</form>
</body>
</html>