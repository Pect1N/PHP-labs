<html>
  <head>
  </head>
  <body>
  <form action="http://myfirstsite.ru/Lab_2.0.php">
		<input type="submit" value="Back">
	</form>
  <form action="http://myfirstsite.ru/Lab_2.2.php" method='post'>
    <p>ДАТА СОЗДАНИЯ: <input type="date" name='Дата'></p>
    <hr>
    <p>Персональная информация</p>
    <p>ВВЕДИТЕ ИМЯ: <input type="text" name='Имя'></p>
    <p>ВВЕДИТЕ E-MAIL: <input type="text" name='Мэйл'></p>
    <p>КОММЕНТАРИЙ: <br> <textarea cols = '40' rows = '3' type="text" name='comment'></textarea></p>
    <hr>
    <p>Дополнительная информация</p>
    <p>ДОСТАВКА:
      <p><input type="checkbox" name='choise' value='f1'>Курьер</p>
      <p><input type="checkbox" name='choise' value='f2'>Самолет</p>
      <p><input type="checkbox" name='choise' value='f3'>Поезд</p>
      <p><input type="checkbox" name='choise' value='f4'>Автотранспорт</p>
    </p>
    <p>ФОРМА ПОСЫЛКИ:
      <select size='1' name='forma'>
      <!-- set elements of lit -->
        <option selected value="s1">Прямоугольная</option>
        <option value="s2">Квадратная</option>
        <option value="s3">Цилиндрическая</option>
      </select>
    </p>
    <p>ЦВЕТ ПОСЫЛКИ: <input type="color" name='Цвет'></p>
    <p>КОЛИЧЕСТВО: <input type="text" name='number'></p>
    <table>
      <tr>
        <td>
          ТАРА:
          <br>
            <p><input type="checkbox" name='tara' value='t1'>Бьющаяся</p>
            <p><input type="checkbox" name='tara' value='t2'>Хрупкая</p>
            <p><input type="checkbox" name='tara' value='t3'>Водонепроницаемая</p>
            <p><input type="checkbox" name='tara' value='t4'>Пожароопасная</p>
        </td>
        <td>
          ВЕС:       
          <p><input type="radio" name='mass' value='r1'>До 50 кг</p>
          <p><input type="radio" name='mass' value='r2'>Больше 50 кг</p>
        </td>
      </tr>
    </table>
    <input type="submit" value='Send'>
  </form>
  <form action="http://myfirstsite.ru/Lab_2.1.php">
    <input type="reset" value='Clear'>
  </form>
  </body>
</html>