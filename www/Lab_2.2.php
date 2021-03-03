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
    <p>ВЕС посылки:<font color='red'>
      <?php
        if(htmlspecialchars($_POST['mass']) == 'r1')
        {
          ?>
          < 50 кг
          <?php
        }
        elseif(htmlspecialchars($_POST['mass']) == 'r2')
        {
          ?>
          > 50 кг
          <?php
        }
      ?>
    </font></p>
    <p>Цвет посылки: </p>
    <p>КОД ЦВЕТА= <?php echo htmlspecialchars($_POST['Цвет']); ?></p>
    <p>Была сипользована тара:
    <br>
    <?php
      $mass = array('t1' => 0, 't2' => 0, 't3' => 0, 't4' => 0);
      if (htmlspecialchars($_POST['tara']) == 't1')
        $mass['t1'] = 1;
      if (htmlspecialchars($_POST['tara']) == 't2')
        $mass['t2'] = 1;
      if (htmlspecialchars($_POST['tara']) == 't3')
        $mass['t3'] = 1;
      if (htmlspecialchars($_POST['tara']) == 't4')
        $mass['t4'] = 1;
      foreach($mass as $tara)
      {
        echo $tara;
      }
    ?>
    </p>
    <p>КОММЕНТАРИЙ: <font color='red'> <?php echo htmlspecialchars($_POST['comment']); ?> </font></p>
  </body>
</html>