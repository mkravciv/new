<?php

  // $connect = mysql_connect("192.168.1.223", "petrynchyn", "WE34op") or die('Подключение к базе данных не возможно <b><u>'.mysql_error()."</b></u>");
   //  mysql_select_db('printers',$connect) or die('Подключение к базе данных не возможно <b><u>'.mysql_error()."</b></u>");
  //  mysql_query('SET NAMES UTF8',$connect) or die('SET NAMES UTF8 failed');
   
 // Соединение с сервером БД
	mysql_connect("192.168.1.223", "petrynchyn", "WE34op") or die (mysql_error ());
   

	// Выбор БД
	mysql_select_db("printers") or die(mysql_error());
//    mysql_query('SET NAMES UTF8',$connect) or die('SET NAMES UTF8 failed');
  


    mysql_query("set character_set_client='UTF8'");
    mysql_query("set character_set_results='utf8'");
   // mysql_query("set collation_connection='cp1251_ukrainian_ci'");
   // mysql_query('SET CHARACTER SET cp1251');



    
// заявка на запись в БД
// Пишет ошибку в поле VALUES, типа нельзя писать $_POST
 
 //  mysql_query("INSERT INTO gurnal_zapravky(data,id_kabineta,id_printer,zrobleno,materialy,id_name_prac)
 //  VALUES($_POST['date'], $_POST['kabinet'], $_POST['model_priner'], $_POST['work'], $_POST['rozhid'], $_POST['name_prac'], NOW()),$connect");

 
 //$date = "2015.01.16";
 $sql = 'INSERT INTO perelik_printers(model_printer, kabinet, vidpovidalnuy, ip_adress, katridg, toner, dod_katridg)
 VALUES("'.$_POST['model_printer'].'","'.$_POST['kabinet'].'","'.$_POST['vidpovidalnuy'].'","'.$_POST['ip_adress'].'","'.$_POST['katridg'].'" ,"'.$_POST['toner'].'","'.$_POST['dod_katridg'].'")';

// проверка
 if(!mysql_query($sql))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';}
 else
 {echo '<center><p><b>Данные успешно добавлены!</b></p></center>';}
 
 //strSQL = "INSERT INTO gurnal_zapravky(data) values('" . $_POST["date"] . "')"
  

print_r($_POST);
 
header("Location: ".$_SERVER['HTTP_REFERER']); 
 
?>