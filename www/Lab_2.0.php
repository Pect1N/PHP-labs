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
    <hr>
    <?php
      $test;
      if(isset($_POST['file']))
      {
        $test = $_POST['file'];
        if($test == 'f1')
          echo H;
        elseif($test == 'f2')
          echo e;
        elseif($test == 'f3')
          echo l;
      }
      if(isset($_POST['param']))
      {
        $test = $_POST['param'];
        if($test == 's1')
        {
          ?>
          <table>
            <?php
            $j = 1;
            while($j <= 10)
            {
              ?>
              <tr>
                <?php
                $i = 1;
                while ($i <= 10)
                {
                  ?>
                  <td>
                    <?php
                      echo $i * $j;
                      $i++;
                    ?>
                  </td>
                  <?php
                }
                $j++;
                ?>
              </tr>
              <?php
            }
            ?>
          </table>
          <?php
        }
        elseif($test == 's2')
        {
          $summ = 0;
          for($i = 1; $i < 100; $i+=2)
          {
            echo $summ += $i;
            echo ' ';
            if($summ % 10 == 9)
            {
              ?>
              <br>
              <?php
            }
          }
        }
        elseif($test == 's3')
        {
          ?>
          <form method='post' action="">
            <input type="text" name="Слово" placeholder="Введите слово"> <br>
            <input type="submit" name='Перевести'>
          </form>
          <?php
        }
      }
      if(isset($_POST['Слово']))
      {
        ?>
        <p>Ваш перевод:
        <?php
        $test = $_POST['Слово'];
        switch ($test)
        {
          case 'Кошка':
            echo Cat;
            break;
          case 'Собака':
            echo Dog;
            break;
          case 'Дом':
            echo House;
            break;
          case 'День':
            echo Day;
            break;
          case 'Ночь':
            echo Night;
            break;
          case 'Он':
            echo He;
            break;
          case 'Она':
            echo She;
            break;                                          
          default:
            echo Wrong;
            break;
        }
        ?>
        </p>
        <?php
      }
    ?>
  </body>
</html>