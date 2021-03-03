<html>
  <head>
  </head>
  <body>
  <form action="http://myfirstsite.ru/Lab_2.1.php">
		<input type="submit" value="Back">
	</form>
    <p>Дата создания извещения: <font color='red'> <?php echo htmlspecialchars($_POST['Дата']); ?> </font></p>
    <p>Здравствуйте <font color='red'> <?php echo htmlspecialchars($_POST['Имя']); ?> </font></p>
    <p>Ваш e-mail: <font color='red'> <?php echo htmlspecialchars($_POST['Мэйл']); ?> </font></p>
    <p>Ваша доставка:</p>
    <p>Форма посылки: <font color='red'> <?php echo htmlspecialchars($_POST['forma']); ?> </font></p>
    <p>Количество: <font color='red'> <?php echo htmlspecialchars($_POST['number']); ?> </font></p>
    <p>ВЕС посылки:</p>
    <p>Цвет посылки: </p>
    <p>КОД ЦВЕТА </p>
    <p>Была сипользована тара: </p>
    <p>КОММЕНТАРИЙ: <font color='red'> <?php echo htmlspecialchars($_POST['comment']); ?> </font></p>
  </body>
</html>