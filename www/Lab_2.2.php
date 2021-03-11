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
    <p>Ваша доставка: <font color='red'> <br>
      <?php
        if($_POST['choise'] != 0)
        {
          foreach($_POST['choise'] as $choise)
          {
            if($choise == 'f1')
              echo "Курьер <br/>";
            if($choise == 'f2')
              echo "Самолет <br/>";
            if($choise == 'f3')
              echo "Поезд <br/>";
            if($choise == 'f4')
              echo "Автотранспорт <br/>";
          }
        }
      ?>
    </font></p>
    <p>Форма посылки: <font color='red'>
      <?php
        if($_POST['forma'] == 's1')
          echo "Прямоугольная <br/>";
        if($_POST['forma'] == 's2')
          echo "Квадратная <br/>";
        if($_POST['forma'] == 's3')
          echo "Цилиндрическая <br/>";
      ?>
    </font></p>
    <p>Количество: <font color='red'> <?php echo htmlspecialchars($_POST['number']); ?> </font></p>
    <p>ВЕС посылки:<font color="red">
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
    <?php
    $qwe = htmlspecialchars($_POST['Цвет']);
    echo "<p>Цвет посылки: <font color=".$qwe."> <table bgcolor=".$qwe."><tr><td></td></tr></table></font> </p>";
    echo "<p> <font color=".$qwe."> КОД ЦВЕТА= $qwe </font> </p>";
    ?>
    <p>Была сипользована тара: <font color='red'>
    <br>
    <?php
      if($_POST['tara'] != 0)
      {
        foreach($_POST['tara'] as $tara)
        {
          if($tara == 't1')
            echo "Бьющаяся <br/>";
          if($tara == 't2')
            echo "Хрупкая <br/>";
          if($tara == 't3')
            echo "Водонепроницаемая <br/>";
          if($tara == 't4')
            echo "Пожароопасная <br/>";
        }
      }
    ?>
    </font></p>
    <p>КОММЕНТАРИЙ: <font color='red'> <?php echo htmlspecialchars($_POST['comment']); ?> </font></p>
  </body>
</html>