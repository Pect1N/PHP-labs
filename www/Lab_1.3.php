<html>
<head>
	<title>Задание 3</title>
	<link rel='stylesheet' href='style_1.css'>
</head>
<body>
	<?php
		$object = array(
			'Гантеля'=>array(
				'Имя'=>'Гантеля',
				'Вес'=>'5',
				'Производитель'=>'A',
				'Направление'=>'Руки'
			),
			'Перекладина'=>array(
				'Имя'=>'Перекладина',
				'Вес'=>'0',
				'Производитель'=>'B',
				'Направление'=>'Спина'
				)
		);
		$sobject = array(
			'Силовые'=>array(
				'Гантеля'=>array(
					'Имя'=>'Гантеля',
					'Вес'=>'5',
					'Производитель'=>'A',
					'Направление'=>'Руки'
				),
				'Блин'=>array(
					'Имя'=>'Блин',
					'Вес'=>'2',
					'Производитель'=>'С',
					'Направление'=>'Руки'
					)
			),
			'Кардио'=>array(
				'Дорожка'=>array(
					'Имя'=>'Беговая дорожка',
					'Вес'=>'40',
					'Производитель'=>'B',
					'Направление'=>'Ноги'
				),
				'Велотренажер'=>array(
					'Имя'=>'Велотренажер',
					'Вес'=>'40',
					'Производитель'=>'D',
					'Направление'=>'Ноги'
				)
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