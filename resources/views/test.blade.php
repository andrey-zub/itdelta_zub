

  @include('inc.header')


      <?
      echo '<h5>Задание №1 -  массив строк</h5>';
      $arr = ['Я', 'хочу', 'быть', 'программистом'];

      echo '<pre>';

      print_r($arr);
      ?>

      <?

      echo ' <h5>Задание №2 - в каждом слове, второй символ заглавный</h5>';
      echo '<p>';

        echo 'Изначальный массив:';
        $arr = ['wadawd','dawfwegqe','qwfqegfwsad','wrgwegdgeqw'];
        print_r ($arr);

      foreach ($arr as &$value) {
          $value[1]=mb_convert_case($value[1], MB_CASE_UPPER, "UTF-8");
      }
          unset($value);
      echo '<p>';
          echo 'Конечный вариант:';
      echo '<p>';
          print_r ($arr);

      ?>

  @include('inc.footer')
