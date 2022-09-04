<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\XmlConverter; // класс для обработки xml документа и форматирования данных в csv

class ReadXmlController extends Controller{

  public function index(){

    $csv_src = storage_path('app/public/itdelta_src.csv'); // место хранения csv файла
    $xml_src = "https://it-delta.ru./local/docs/yandex_not_sku.xml";//  исходный xml файл
    $xml_file = simplexml_load_file($xml_src);//  загрузка исходного файла , для дальнейшей обработки

       $json_xml = json_encode($xml_file);
       $xml_data = json_decode($json_xml, true);

//----------------------------------------------------
    $csv_file = fopen(storage_path('app/public/itdelta_src.csv'), 'w'); // открытие csv файла на запись

          $converter = new XmlConverter(); // объект класса обработчика xml обработчика
          $converter->converter($xml_file, $csv_file);

    fclose($csv_file); // закрытиее csv файла

      return dd($xml_data); // отображение данных из xml на сайте
  }


}
