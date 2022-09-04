<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XmlConverter extends Model
{
      function Converter($xml_data, $csv_data) {


        fputs($csv_data, chr(0xEF) . chr(0xBB) . chr(0xBF)); // добавление BOM для кодировки кириллицы

        foreach ($xml_data->children() as $data) {  // проход по вытянутым данным из xml
            $hasChild = (count($data->children()) > 0) ? true : false; // флаг на наличие дочерних элементов


            if( ! $hasChild) {  // проверка на наличме дочерих элементов
                $arr = array($data->getName(),$data); // массив для данных по текущему элементу в цикле

                fputcsv($csv_data, $arr ,';');    // запись массива с данными по текущему элементу цикла в csv файл
            }
            else {

                $this->converter($data, $csv_data); // вызов обработчика на несоответствии условию наличия дочерних элементов
            }
        }
    }
}
