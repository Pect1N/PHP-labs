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
          <form>
            <p>
              <!-- set parameters of list -->
              <select name="param" size='1' id="">
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
          <form>
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
  </body>
</html>