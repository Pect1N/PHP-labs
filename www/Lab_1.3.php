<html>
<head>
	<title>Задание 3</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<?php
		$object = array(
			'Гантеля'=>array('Гантеля', '5', 'A', 'Руки'),
			'Перекладина'=>array('Перекладина', '0', 'B', 'Спина')
		);
		$sobject = array(
			'Силовые'=>array(
				'Гантеля'=>array('Гантеля', '5', 'A', 'Руки'),
				'Блин'=>array('Блин', '2', 'С', 'Руки')
			),
			'Кардио'=>array(
				'Дорожка'=>array('Беговая дорожка', '40', 'B', 'Ноги'),
				'Велотренажер'=>array('Велотренажер', '40', 'D', 'Ноги')
			)
		);
	?>
	<table border=1 bgcolor=red>
		<tr>
			<th>Название</th>
			<th>Вес</th>
			<th>Производитель</th>
			<th>Применение</th>
		</tr>
		<?php
			foreach($object as $d1)
			{
				?>
				<tr>
				<?php
				foreach($d1 as $d2)
				{
					?>
					<td> <?php echo $d2 ?> </td>
					<?php
				}
				?>
				</tr>
				<?php
			}
		?>
	</table>
	<hr>
	<table border=1 bgcolor=green>
		<tr>
			<?php
				foreach($sobject as $key=>$d1)
				{
					?>
					<th colspan=6>
						<?php
						echo $key;
						?>
					</th>
					<?php
				}
			?>
		</tr>
		<tr>
			<?php
				foreach($sobject as $d1)
				{
					foreach($d1 as $d2)
					{
						$flag = 0;
						foreach($d2 as $d3)
						{
							if($flag == 0)
							{
								?>
									<th colspan=3>
										<?php
												echo $d3;
												$flag = 1;
										?>
									</th>
								<?php
							}
						}
					}
				}
			?>
		</tr>
		<tr>
			<?php
					foreach($sobject as $d1)
					{
						foreach($d1 as $d2)
						{
							$flag = 0;
							foreach($d2 as $d3)
							{
								if($flag != 0)
								{
									?>
										<td>
											<?php
													echo $d3;
											?>
										</td>
									<?php
								}
								$flag = 1;
							}
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