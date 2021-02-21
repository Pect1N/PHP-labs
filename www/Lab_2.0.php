<html>
  <head>
    <link rel='stylesheet' href='style_2.css'> <!-- add css -->
  </head>
  <body>
    <!-- create table -->
    <table>
      <!-- first line -->
      <tr>
        <!-- fill first element -->
        <td>
          <h2>Работа с циклическими структурами</h2>
          <!-- form to create list -->
          <form method='post'>
            <p>
              <!-- set parameters of list -->
              <select size='1' name='param'>
                <!-- set elements of lit -->
                <option selected value="s1">Таблица умножения</option>
                <option value="s2">Сумма нечетных</option>
                <option value="s3">Переводчик</option>
              </select>
            </p>
            <!-- button -->
            <input type="submit" value='Ок'>
          </form>
        </td>
        <!-- fill second element -->
        <td>
          <h2>Работа с файлми</h2>
          <!-- form to create switch -->
          <form method='post'>
            <!-- set elements of switch -->
            <p><input type="radio" name='file' value='f1'>Созание файла</p>
            <p><input type="radio" name='file' value='f2'>Добавление в файл</p>
            <p><input type="radio" name='file' value='f3'>Вывод из файла</p>
            <!-- button -->
            <input type="submit" value='Ok'>
          </form>
        </td>
      </tr>
    </table>
    <?php
      $test;
      if(isset($_POST['file']))
      {
        $test = $_POST['file'];
        if($test == 'f1')
          echo hello;
        elseif($test == 'f2')
          echo world;
        elseif($test == 'f3')
          echo HW;
      }
      if(isset($_POST['param']))
      {
        $test = $_POST['param'];
        if($test == 's1')
          echo Hello;
        elseif($test == 's2')
          echo World;
        elseif($test == 's3')
          echo hw;
      }
    ?>
  </body>
</html>